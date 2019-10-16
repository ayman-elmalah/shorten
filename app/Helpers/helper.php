<?php

/**
 * Generate unique value for table
 *
 * @param string $table
 * @param string $column
 * @return mixed
 */
if(! function_exists('unique')) {
    function unique($table, $column) {
        $value = substr(md5(mt_rand()), 0, 8);
        $isset = \Phplite\Database\Database::table($table)->where($column, '=', $value)->first();

        return $isset ? unique($table, $column) : $value;
    }
}