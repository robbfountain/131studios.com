<?php

namespace App\Nova;

use App\Nova\Actions\PublishBlog;
use App\Nova\Actions\UnpublishBlog;
use App\Nova\Filters\BlogCategory;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Panel;
use Spatie\TagsField\Tags;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\BelongsTo;
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

            CloudinaryImage::make('Image'),
            Markdown::make('Body')->stacked(),
            Boolean::make('Published', 'is_published')
                ->sortable()
            ->help('Check to publish immediately'),

            DateTime::make('Publish Date', 'published_at')
                ->format('MMM D, YYYY')
                ->sortable()
                ->nullable()
                ->help('Leave blank to publish now or set a date in the future.'),

            new Panel('Website',$this->websiteFields()),

            new Panel('Tweet', $this->tweetFields()),

            new Panel('Project Information', $this->projectFields()),

        ];
    }

    public function websiteFields()
    {
        return [
            Text::make('Website URL','reference_url')->nullable(),
        ];
    }

    /**
     * @return array
     */
    protected function projectFields()
    {
        return [
            Text::make('Project Title')->hideFromIndex()->help('Title will be created automatically or enter manually.'),
            Markdown::make('Project Description')->nullable()->stacked(),
            Text::make('Project URL', 'url')->nullable()->hideFromIndex(),
        ];
    }

    public function tweetFields()
    {
        return [
            Text::Make('Tweet')->nullable(),
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
