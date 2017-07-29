<?php
namespace LaravelPkeys;
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 29/07/17
 * Time: 22:17
 */
class PkeysFacade extends \Illuminate\Support\Facades\Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pkey'; }
}