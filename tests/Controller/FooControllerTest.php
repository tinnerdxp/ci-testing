<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooControllerTest extends WebTestCase {
    public function testShowPost() {
        $client = static::createClient();
        $client->request('GET', '/foo');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}