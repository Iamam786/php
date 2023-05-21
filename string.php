<?php

    $str = "This ";
    echo $str . "<br>";
    $length = strlen($str);

    echo "The length of this string is ". $length , " Abdul";
    echo "The Numbers of words in string ", str_word_count($str), " Numbers";

    echo "the revers string ". strrev($str);
    echo "the search for is in this is ". strpos($str,"is");
    echo "the replace is ". str_replace("is","at", $str);

?>