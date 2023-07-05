<?php

use Lnourry75\Rendu1packagistendtoend\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandomNumber());   
        $this->assertGreaterThanOrEqual(0, $api->getRandomNumber());
        $this->assertLessThanOrEqual(100, $api->getRandomNumber());
    }
}