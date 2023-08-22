<?php

namespace Fanboykun\Datamining;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fanboykun\Datamining\Skeleton\SkeletonClass
 */
class DataminingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datamining';
    }
}
