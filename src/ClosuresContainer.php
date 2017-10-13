<?php

namespace Lachezargrigorov\ClosuresContainer;

use Lachezargrigorov\ClosuresContainer\Exceptions\ClosuresContainerException;

class ClosuresContainer
{
    /** Singleton instance
     * @var
     */

    protected static $instance;

    /** Registered closures
     * @var array
     */

    private $register = [];

    public function __construct(){}

    /** Return a singleto instance
     * @return mixed
     */

    public static function getInstance()
    {
        if(null === static::$instance)
        {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /** Register a closure
     * @param $name - name
     * @param $closure - closure
     */

    public function register( $name, $closure )
    {
        $this->register[$name] = $closure;
    }

    /** Check if closure registered
     * @param $name
     *
     * @return bool
     */

    public function isRegistered($name)
    {
        return array_key_exists($name,$this->register);
    }

    public function __call( $name, array $arguments )
    {
        if(!isset($this->register[$name]))
            throw new ClosuresContainerException("'".$name."' closure is not registered!");

        return $this->register[$name](...$arguments);
    }
}
