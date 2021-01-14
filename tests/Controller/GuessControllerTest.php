<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GuessControllerTest extends WebTestCase
{
    public function setUp() : void
    {
        $this->client = static::createClient();
    }
    public function testShowHome() : void
    {
        $this->client->request('GET', '/');
        $this->assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testShowGuess() : void
    {
        $this->client->request('GET', '/guess/');
        $this->assertSame(301, $this->client->getResponse()->getStatusCode());

        $this->client->request('GET', '/guess/s');
        $this->assertSame(301, $this->client->getResponse()->getStatusCode());

        $this->client->request('GET', '/guess/0');
        $this->assertSame(301, $this->client->getResponse()->getStatusCode());

        $this->client->request('GET', '/guess/1');
        $this->assertSame(200, $this->client->getResponse()->getStatusCode());

    }

    public function testGuessJsonResource() : void
    {
		$this->markTestIncomplete(
          'This one after it works with GET HTTP Method.'
		);
    }

    public function test404RedirectsHome() : void
    {
		$this->markTestIncomplete(
          'This one for last, with services.'
		);
    }
}
