<?php

namespace App\Helpers;

use Blade;

class CustomHelper
{
    public static function bladeRenderer($body){
        $render_ready = str_replace(
            '\=\&gt;', '=>', $body,
        );
        $render_ready = str_replace('=&gt;', '=>', $render_ready);
        $output = Blade::render($render_ready);
        return $output;
    }
    public static function shortenString($string, $limit = 468) {
        // Remove HTML tags
        $string = strip_tags($string);

        // Remove images
        $string = preg_replace('/<img[^>]+\>/i', '', $string);

        // Shorten string
        if (strlen($string) > $limit) {
            // Cut the string
            $string = substr($string, 0, $limit);

            // Ensure it ends in a word so it doesn't cut in the middle
            $string = substr($string, 0, strrpos($string, ' '));

            // Add ellipses
            $string .= '...';
        }

        return $string;
    }


}
