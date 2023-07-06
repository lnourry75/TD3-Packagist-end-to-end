<?php

use louis\OssTd2\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetAllCharacters(): void
    {
        $api = new Api('https://fireemblem.fandom.com/fr/wiki/Liste_des_personnages_de_Fire_Emblem:_Three_Houses');
        $this->assertIsArray($api->getAllCharacters());
    }
}
