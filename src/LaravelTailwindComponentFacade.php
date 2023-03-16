<?php

namespace Laltu\LaravelTailwindComponent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelTailwindComponent\Skeleton\SkeletonClass
 */
class LaravelTailwindComponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-tailwind-component';
    }
}
