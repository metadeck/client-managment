<?php

namespace Metadeck\ClientManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Metadeck\ClientManager\Skeleton\SkeletonClass
 */
class ClientManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'client-manager';
    }
}
