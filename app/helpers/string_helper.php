<?php 

function limitWords($text, $limit) {
    $word_arr = explode(" ", $text);

    if (count($word_arr) > $limit) {
        $words = implode(" ", array_slice($word_arr , 0, $limit) ) . ' ...';
        return $words;
    }

    return $text;
}