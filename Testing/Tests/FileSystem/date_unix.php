[expect php]
[file]

<?php
include 'fs.inc';

date_default_timezone_set("Europe/Prague");

// Dates corresponding to: Januray 1st, 1970, 12:01:11 am
$dt = mktime(1, 0, 11, 1, 1, 1970) ; // [int hour [, int minute [, int second [, int month [, int day [, int year [, int is_dst]]]]]]])

D(array(
  date('F j, Y; [H:i:s] (H) \h\o\u\r\s', $dt),
  date('l', $dt), // Prints something like: Wednesday
  date('l dS \o\f F Y h:i:s A', $dt), // Prints something like: Wednesday 15th of January 2003 05:51:38 AM
  date("l \\t\h\\e jS", $dt), 
date ("F j, Y, g:i a", $dt),                 // March 10, 2001, 5:16 pm
date ("m.d.y", $dt),                         // 03.10.01
date ("j, n, Y", $dt),                       // 10, 3, 2001
date ("Ymd", $dt),                           // 20010310
date ('h-i-s, j-m-y, it is w Day z ', $dt),  // 05-16-17, 10-03-01, 1631 1618 6 Fripm01
date ('\i\t \i\s \t\h\e jS \d\a\y.', $dt),   // It is the 10th day.
date ("D M j G:i:s \\M\\S\\T(!) Y", $dt),               // Sat Mar 10 15:16:08 MST 2001
date ('H:m:s \m \i\s \m\o\n\t\h', $dt),     // 17:03:17 m is month
date ("H:i:s", $dt),                         // 17:16:17
gmdate ("H:i:s", $dt),                         // 17:16:17
  date('U', $dt),
  date('', $dt)
)) ;


?>  
 

