<?php 
$summary = <<< summary
In the latest installment of the ongoing Developer.com PHP series, 
I discuss the many improvements and additions to PHP 5's 
object-oriented architecture.
summary;
   $words = str_word_count($summary,2);
   $frequency = array_count_values($words);
   print_r($frequency);