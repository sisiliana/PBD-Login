<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Config;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
     public function testGetConnection()
     {
         $connection = Database::getCOnnection();
         self::assertNotNull($connection);
     }
     public function testGetConnectionSingleton()
     {
         $connection1 = Database::getCOnnection();
         $connection2 = Database::getCOnnection();
         self::assertSame($connection1, $connection2);
     }
}