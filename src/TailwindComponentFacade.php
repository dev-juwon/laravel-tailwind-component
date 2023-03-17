<?php

namespace Laltu\TailwindComponent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\TailwindComponent\Skeleton\SkeletonClass
 */
class TailwindComponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tailwind-component';
    }
}
