<?php

namespace App\Nova;

use App\Nova\Actions\CreateContractDocument;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class Contract extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Contract::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

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
            Heading::make('Client Info'),
            Text::make('Business Name')->rules(['string']),
            Text::make('Client Name', 'name')->rules(['required', 'string']),
            Text::make('Client Email', 'email')->rules(['required', 'email']),
            Place::make('Client Address', 'address')
                ->onlyOnForms(),
            Text::make('Client Phone', 'phone'),
            Trix::make('Project Scope', 'scope')->rules(['required'])
                ->hideFromIndex(),
            Heading::make('Milestones'),
            Date::make('Start Date', 'starts_at'),
            Date::make('Approval Date', 'approval_milestone'),
            Date::make('Project End', 'ends_at'),
            Heading::make('Revisions'),
            Number::make('Revisions Allowed', 'revisions')
                ->hideFromIndex(),
            Currency::make('Revision Cost', 'revision_cost')
                ->hideFromIndex(),
            Heading::make('Project Cost'),
            Currency::make('Project Cost', 'total_cost')->rules(['required', 'numeric']),
            Currency::make('Deposit', 'deposit')->help('Leave blank to automatically calculate.')
            ->hideFromIndex(),

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
            CreateContractDocument::make(),
        ];
    }
}
