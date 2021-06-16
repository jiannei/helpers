<?php

/*
 * This file is part of the jiannei/helpers.
 *
 * (c) jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

if (!function_exists('format_duration')) {
    /**
     * Format duration.
     */
    function format_duration(float $seconds): string
    {
        if ($seconds < 0.001) {
            return round($seconds * 1000000).'μs';
        }

        if ($seconds < 1) {
            return round($seconds * 1000, 2).'ms';
        }

        return round($seconds, 2).'s';
    }
}

if (!function_exists('human_filesize')) {
    /**
     * human filesize.
     *
     * @param $size
     */
    function human_filesize($size, int $precision = 2): string
    {
        $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $i = 0;
        while (($size / 1024) > 0.9) {
            $size /= 1024;
            ++$i;
        }

        return round($size, $precision).' '.$units[$i];
    }
}

if (!function_exists('strtobool')) {
    /**
     * Convert string to boolean.
     *
     * @param $str
     */
    function strtobool($str): bool
    {
        return (bool) json_decode(strtolower($str));
    }
}
