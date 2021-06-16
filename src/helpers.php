<?php

if (! function_exists('formatDuration')) {
    /**
     * Format duration.
     *
     * @param  float  $seconds
     *
     * @return string
     */
    function formatDuration(float $seconds): string
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
     * human filesize
     *
     * @param $size
     * @param  int  $precision
     * @return string
     */
    function human_filesize($size, int $precision = 2): string
    {
        $units = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $i = 0;
        while (($size / 1024) > 0.9) {
            $size /= 1024;
            $i++;
        }

        return round($size, $precision).' '.$units[$i];
    }
}