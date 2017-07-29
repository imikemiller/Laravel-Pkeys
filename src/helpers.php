<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 29/07/17
 * Time: 22:20
 */

if (! function_exists('pkey')) {
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function pkey($pattern,$params = [])
    {
        return app()->make(\Pkeys\Pkey::class)->build($pattern,$params);
    }
}
