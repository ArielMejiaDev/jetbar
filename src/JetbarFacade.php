<?php

namespace Arielmejiadev\Jetbar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arielmejiadev\Jetbar\Skeleton\SkeletonClass
 */
class JetbarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetbar';
    }
}
