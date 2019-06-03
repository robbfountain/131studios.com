<?php

namespace App\Nova;

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
        return [];
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
            BelongsTo::make('Category'),
            BelongsTo::make('User'),
            Text::make('Title'),
            Text::make('Slug')->onlyOnForms(),
            CloudinaryImage::make('Image'),
            Markdown::make('Body'),
            Boolean::make('Published', 'is_published')->withMeta(["value" => 1])->sortable(),
            DateTime::make('Publish Date', 'published_at')->format('MMM D, YYYY')->sortable(),
            Tags::make('Tags')->onlyOnForms(),
            Heading::make('Project Information')->onlyOnForms(),

            new Panel('Project Information', $this->projectFields()),

        ];
    }

    protected function projectFields()
    {
        return [
            Text::make('Project Title')->nullable()->hideFromIndex(),
            Markdown::make('Project Description')->nullable(),
            Text::make('Project URL', 'url')->nullable()->hideFromIndex(),
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
        return [];
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
