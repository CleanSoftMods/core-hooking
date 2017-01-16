<?php

use WebEd\Base\Hook\Support\Facades\ActionsFacade;
use WebEd\Base\Hook\Support\Facades\FiltersFacade;

if (!function_exists('add_action')) {
    /**
     * @param string $hook
     * @param \Closure|string|array|callable $callback
     * @param int $priority
     */
    function add_action($hook, $callback, $priority = 20)
    {
        ActionsFacade::addListener($hook, $callback, $priority);
    }
}

if (!function_exists('do_action')) {
    /**
     * Do actions
     * @param string $hookName
     * @param array ...$args
     */
    function do_action($hookName, ...$args)
    {
        ActionsFacade::fire($hookName, $args);
    }
}

if (!function_exists('add_filter')) {
    /**
     * @param string $hook
     * @param \Closure|string|array|callable $callback
     * @param int $priority
     */
    function add_filter($hook, $callback, $priority = 20)
    {
        FiltersFacade::addListener($hook, $callback, $priority);
    }
}

if (!function_exists('do_filter')) {
    /**
     * Do action then return value
     * @param string $hookName
     * @param array ...$args
     * @return mixed
     */
    function do_filter($hookName, ...$args)
    {
        return FiltersFacade::fire($hookName, $args);
    }
}

if (!function_exists('get_hooks')) {
    /**
     * @param string $hook
     * @param \Closure|string|array|callable $callback
     * @param int $priority
     */
    function get_hooks($name = null, $type = 'filter')
    {
        if ($type == 'filter') {
            $listeners = FiltersFacade::getListeners();
            if (!$name) {
                return $listeners;
            }
            return array_get($listeners, $name);
        }
        $listeners = ActionsFacade::getListeners();
        if (!$name) {
            return $listeners;
        }
        return array_get($listeners, $name);
    }
}