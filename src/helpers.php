<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 29/07/17
 * Time: 22:20
 */

if (! function_exists('pkey')) {

    /**
     * Helper method to access the Pkey factory class
     *
     * @param $pattern
     * @param array $params
     * @return mixed
     */
    function pkey($pattern,$params = [])
    {
        return app()->make(\Pkeys\Pkey::class)->make($pattern,$params);
    }
}
