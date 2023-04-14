<?php

declare(strict_types=1);

namespace App\Factories;

class FactoryCollectionDecorator
{
    public function __construct(
       protected $instance,
    ) {}

    public function getInstance()
    {
        return $this->instance;
    }

    public function newCollection($items = null)
    {
        return collect($items);
    }
}
