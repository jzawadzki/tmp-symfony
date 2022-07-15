<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SomeTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $client->jsonRequest('POST', '/test-route',[]);
        $client->getResponse();

        $this->assertResponseIsSuccessful(200);

    }
}
