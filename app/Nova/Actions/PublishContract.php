<?php

namespace App\Nova\Actions;

use App\Events\ContractWasPublished;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class PublishContract extends Action implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    public $name = "Publish Contract";

    /**
     * Perform the action on the given models.
     *
     * @param \Laravel\Nova\Fields\ActionFields $fields
     * @param \Illuminate\Support\Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            if (!$model->isPublished()) {
                $model->publish();

                event(new ContractWasPublished($model));

                $this->markAsFinished($model);
            } else {
                $this->markAsFailed($model);
            }
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
