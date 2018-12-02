<?php

namespace LuizReginaldo\SON;

use PHPUnit\Framework\TestCase;

class HelloPackageTest extends TestCase
{
     public function testGetHello()
     {
         $hello = new HelloPackage();

         $string = $hello->getHello();

         $this->assertNotNull($string);
         $this->assertInternalType('string',$string);
         $this->assertNotEquals(0,strlen($string));
     }      
}