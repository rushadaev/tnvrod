<?php

namespace App\Helpers;

class CustomHelper
{
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
