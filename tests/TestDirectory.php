<?php


use PHPUnit\Framework\TestCase;

class TestDirectory extends TestCase
{
    public  function testScanDir():void
    {
        $dir = __DIR__ . "/../public/assets/my-img/gallery";
        $temp = scandir($dir, 0);
        var_dump($temp);
        $this->assertIsArray($temp);
    }
}
