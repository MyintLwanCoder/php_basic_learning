
<?php
   $version = "php 4.0";
   print sql_regcase($version);
   // outputs [Pp] [Hh] [Pp] 4.0

   // Fatal error: Uncaught Error: Call to undefined function sql_regcase()
   // cannot use sql_regcase() function php vesion 4 above.
   
?>