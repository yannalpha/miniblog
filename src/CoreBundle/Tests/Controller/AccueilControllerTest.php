<?php

namespace CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccueilControllerTest extends WebTestCase
{
    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/accueil');
    }

    public function testArticles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/articles');
    }

    public function testArticled()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/article');
    }

    public function testCaegorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categorie');
    }

}
