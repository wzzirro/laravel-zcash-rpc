<?php

namespace Wzzirro\Zcash\Traits;

trait Zcashd
{
    /**
     * Get zcashd client instance.
     *
     * @return \Wzzirro\Zcash\Client
     */
    public function zcashd()
    {
        return app('zcashd');
    }
}
