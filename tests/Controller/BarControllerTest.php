<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BarControllerTest extends WebTestCase {
    public function testShowPost() {
        $client = static::createClient();
        $client->request('GET', '/bar');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}