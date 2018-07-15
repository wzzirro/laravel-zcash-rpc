<?php

if (! function_exists('zcashd')) {
    /**
     * Get zcashd client instance.
     *
     * @return \Wzzirro\Zcash\Client
     */
    function zcashd()
    {
        return app('zcashd');
    }
}
