<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase {
    public function testShowPost() {
        $client = static::createClient();
        $client->request('GET', '/index');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}