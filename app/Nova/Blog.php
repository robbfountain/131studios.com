<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use App\Nova\Actions\PublishBlog;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Markdown;
use App\Nova\Filters\BlogCategory;
use Laravel\Nova\Fields\BelongsTo;
use App\Nova\Actions\UnpublishBlog;
use Silvanite\NovaFieldCloudinary\Fields\CloudinaryImage;

/**
 * Class Blog
 * @package App\Nova
 */
class Blog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Blog';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new PublishBlog,
            new UnpublishBlog,
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            BelongsTo::make('User')
                ->hideWhenCreating()
                ->searchable(),

            BelongsTo::make('Category'),

            Text::make('Title'),

            Text::make('Slug')
                ->hideWhenCreating()
                ->hideFromIndex(),

            Text::make('Image')->hideFromIndex()->help('Image Url'),

            Markdown::make('Body')->stacked(),

            Boolean::make('Published', 'is_published')
                ->hideWhenCreating()
                ->hideWhenUpdating()->sortable(),

            Select::make('State', 'is_published')->options([
                '1' => 'Published',
                '0' => 'Draft',
            ])->onlyOnForms(),

            DateTime::make('Publish Date', 'published_at')
                ->format('MMM D, YYYY')
                ->sortable()
                ->nullable()
                ->help('Leave blank to publish now or set a date in the future.'),

            new Panel('Website', $this->websiteFields()),
            new Panel('Tweet', $this->tweetFields()),
            new Panel('Project Information', $this->projectFields()),
        ];
    }

    /**
     * @return array
     */
    public function websiteFields()
    {
        return [
            Text::make('Website URL', 'reference_url')
                ->nullable()
                ->hideFromIndex(),
        ];
    }

    /**
     * @return array
     */
    public function tweetFields()
    {
        return [
            Text::Make('Tweet')
                ->nullable()
                ->hideFromIndex(),
        ];
    }

    /**
     * @return array
     */
    protected function projectFields()
    {
        return [
            Text::make('Project Title')
                ->hideFromIndex()
                ->help('Title will be created automatically or enter manually.'),

            Markdown::make('Project Description')
                ->nullable()
                ->stacked(),

            Text::make('Project URL', 'url')
                ->nullable()
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new BlogCategory,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }
}
