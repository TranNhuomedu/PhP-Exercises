<?php
function test($n) 
{
     $x = 51;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test(53)."<br/>";
echo test(30)."<br/>";
echo test(51)."<br/>";  