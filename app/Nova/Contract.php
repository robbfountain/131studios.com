<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Pdewit\ExternalUrl\ExternalUrl;

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
    public static $title = 'business_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'business_name',
        'name'
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
            Boolean::make('Approved', 'is_approved')
                ->help('Select to approve contract and generate invoice.')
                ->hideWhenCreating(),
            Text::make('Business Name')
                ->rules(['string']),
            BelongsTo::make('User')
                ->searchable()
                ->showCreateRelationButton(),
//            Text::make('Client Name', 'name')
//                ->rules(['required', 'string'])
//                ->hideFromIndex(),
//            Text::make('Client Email', 'email')
//                ->rules(['required', 'email'])
//                ->hideFromIndex(),
            Place::make('Client Address', 'address')
                ->hideFromIndex(),
            Text::make('Client Phone', 'phone')
                ->hideFromIndex(),
            Trix::make('Project Scope', 'scope')
                ->rules(['required'])
                ->hideFromIndex(),
            Heading::make('Milestones'),
            Date::make('Start Date', 'starts_at')
                ->rules(['required']),
            Date::make('Approval Date', 'approval_milestone')
                ->rules(['required'])
                ->hideFromIndex(),
            Date::make('Project End', 'ends_at')
                ->rules(['required'])
                ->hideFromIndex(),
            Heading::make('Revisions')
                ->hideFromIndex(),
            Number::make('Revisions Allowed', 'revisions')
                ->rules(['required'])
                ->default(function () {
                    return 0;
                })
                ->hideFromIndex(),
            Currency::make('Revision Cost', 'revision_cost')
                ->default(function () {
                    return 0.00;
                })
                ->hideFromIndex(),
            Heading::make('Project Cost'),
            Boolean::make('Billed Monthly', 'is_monthly')
                ->help('Setup monthly billing vs. single project cost.'),
            Currency::make('Project Cost', 'total_cost')
                ->rules(['required', 'numeric']),
            Currency::make('Deposit', 'deposit')
                ->default(0)
                ->hideFromIndex(),
            Number::make('Monthly Billing Duration')
                ->nullable()
                ->help('How many consecutive months to bill client upon agreement '),
            ExternalUrl::make('Signed URL', function () {
                return $this->signed_url;
            })->linkText('Contract Link'),

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
            (new Actions\PublishContract())
                ->confirmText('Publishing this contract will create the client billing account.  An email will be sent to the client with details to view the contract.')
                ->confirmButtonText('Publish')
                ->onlyOnDetail(),
            (new Actions\CreateContractDocument)
                ->onlyOnDetail(),
        ];
    }
}
