<?php

declare(strict_types=1);

namespace App\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class CustomFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    public function newModel(array $attributes = [])
    {
        $name = $this->modelName();
        $model = new $name($attributes);

        return new FactoryCollectionDecorator($model);
    }

    public function make($attributes = [], ?Model $parent = null)
    {
        $instances = parent::make($attributes, $parent);

        if ($instances instanceof Collection) {
            return $instances->map(fn ($instance) => $this->resolveInstance($instance));
        }

        return $this->resolveInstance($instances);
    }

    private function resolveInstance($instances)
    {
        return $instances instanceof FactoryCollectionDecorator
            ? $instances->getInstance()
            : $instances;
    }
}
