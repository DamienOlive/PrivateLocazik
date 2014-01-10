<?php

namespace Locazik\AnnonceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MotInterditControllerTest extends WebTestCase
{
    public function testCreermot()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mot-interdit/creer/');
    }

    public function testListermot()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mot-interdit/lister/');
    }

    public function testSupprimermot()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mot-interdit/supprimer/{id}/');
    }

}
