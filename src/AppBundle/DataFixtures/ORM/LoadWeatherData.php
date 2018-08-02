<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Weather;

class LoadWeatherData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $swet = new Weather();
        $swet->setName("weather.swelteringHeat");
	$swet->setDescription("weather.swelteringHeat.description");
        $manager->persist($swet);

        $sunny = new Weather();
        $sunny->setName("weather.verySunny");
	$sunny->setDescription("weather.verySunny.description");
        $manager->persist($sunny);
	
        $nice = new Weather();
        $nice->setName("weather.nice");
	$nice->setDescription("weather.nice.description");
        $manager->persist($nice);
	
        $pouring = new Weather();
        $pouring->setName("weather.pouringRain");
	$pouring->setDescription("weather.pouringRain.description");
        $manager->persist($pouring);
	
        $blizzard = new Weather();
        $blizzard->setName("weather.blizzard");
	$blizzard->setDescription("weather.blizzard.description");
        $manager->persist($blizzard);
	
	$manager->flush();
    }
}