<?php
   $text = "this is\tsome text that\nwe might like to parse.";
   print_r(split("[\n\t]",$text));
   // output
   // Fatal error: Uncaught Error: Call to undefined function split()
   // split function cannot use php version 5 above.
?>