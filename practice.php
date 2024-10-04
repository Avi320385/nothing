<?php

class Avi
{
    public function method1($x,$y)
    {
         $z= ($x+$y);
         return $z;
    }
}

$obj=new Avi;
 echo $obj->method1(12,14);