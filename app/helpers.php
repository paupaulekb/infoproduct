<?php

/**
 * When a model is being unserialized, check if it needs to be booted.
 *
 * @return void
 */
if (!function_exists('getQuery')) {
    function getQuery($sql)
    {
        $query = str_replace(array('?'), array('\'%s\''), $sql->toSql());
        $query = vsprintf($query, $sql->getBindings());

        return $query;
    }
}
