<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Player;
use AppBundle\Entity\Race;

class LoadPlayerData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
	$human = new Race();
	$human->setName("race.human");
	$human->setRrPrice(50000);
	$human->setApoPrice(0);
	$manager->persist($human);

	$ork = new Race();
	$ork->setName("race.ork");
	$ork->setRrPrice(60000);
	$ork->setApoPrice(0);
	$manager->persist($ork);

	$dwarf = new Race();
	$dwarf->setName("race.dwarf");
	$dwarf->setRrPrice(50000);
	$dwarf->setApoPrice(0);
	$manager->persist($dwarf);

	$skaven = new Race();
	$skaven->setName("race.skaven");
	$skaven->setRrPrice(50000);
	$skaven->setApoPrice(0);
	$manager->persist($skaven);	

		/*** Human ***/
	$pl = new Player();
	$pl->setPosition("player.position.tq");
	$pl->setQuantity(16);
	$pl->setCost(50000);
	$pl->setM(6);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($human);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.receiver");
	$pl->setQuantity(4);
	$pl->setCost(70000);
	$pl->setM(8);
	$pl->setF(2);
	$pl->setAG(3);
	$pl->setAR(7);
	$pl->setRace($human);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.thrower");
	$pl->setQuantity(2);
	$pl->setCost(70000);
	$pl->setM(6);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($human);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.blitzer");
	$pl->setQuantity(4);
	$pl->setCost(90000);
	$pl->setM(7);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($human);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.ogre");
	$pl->setQuantity(1);
	$pl->setCost(140000);
	$pl->setM(5);
	$pl->setF(5);
	$pl->setAG(2);
	$pl->setAR(9);
	$pl->setRace($human);
	$manager->persist($pl);


		/*** Ork ***/
	$pl = new Player();
	$pl->setPosition("player.position.tq");
	$pl->setQuantity(16);
	$pl->setCost(50000);
	$pl->setM(5);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(9);
	$pl->setRace($ork);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.thrower");
	$pl->setQuantity(2);
	$pl->setCost(70000);
	$pl->setM(5);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($ork);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.blitzer");
	$pl->setQuantity(4);
	$pl->setCost(80000);
	$pl->setM(6);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(9);
	$pl->setRace($ork);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.blackork");
	$pl->setQuantity(4);
	$pl->setCost(80000);
	$pl->setM(4);
	$pl->setF(4);
	$pl->setAG(2);
	$pl->setAR(9);
	$pl->setRace($ork);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.goblin");
	$pl->setQuantity(4);
	$pl->setCost(40000);
	$pl->setM(6);
	$pl->setF(2);
	$pl->setAG(3);
	$pl->setAR(7);
	$pl->setRace($ork);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.troll");
	$pl->setQuantity(1);
	$pl->setCost(110000);
	$pl->setM(4);
	$pl->setF(5);
	$pl->setAG(1);
	$pl->setAR(9);
	$pl->setRace($ork);
	$manager->persist($pl);


		/*** Skaven ***/
	$pl = new Player();
	$pl->setPosition("player.position.tq");
	$pl->setQuantity(16);
	$pl->setCost(50000);
	$pl->setM(7);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(7);
	$pl->setRace($skaven);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.gutterrunner");
	$pl->setQuantity(4);
	$pl->setCost(80000);
	$pl->setM(9);
	$pl->setF(2);
	$pl->setAG(4);
	$pl->setAR(7);
	$pl->setRace($skaven);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.thrower");
	$pl->setQuantity(2);
	$pl->setCost(70000);
	$pl->setM(7);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(7);
	$pl->setRace($skaven);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.blitzer");
	$pl->setQuantity(2);
	$pl->setCost(90000);
	$pl->setM(7);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($skaven);
	$manager->persist($pl);
	
	$pl = new Player();
	$pl->setPosition("player.position.ratogre");
	$pl->setQuantity(1);
	$pl->setCost(150000);
	$pl->setM(6);
	$pl->setF(5);
	$pl->setAG(2);
	$pl->setAR(8);
	$pl->setRace($skaven);
	$manager->persist($pl);


		/*** Dwarf ***/
	$pl = new Player();
	$pl->setPosition("player.position.blocker");
	$pl->setQuantity(16);
	$pl->setCost(70000);
	$pl->setM(4);
	$pl->setF(3);
	$pl->setAG(2);
	$pl->setAR(9);
	$pl->setRace($dwarf);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.runner");
	$pl->setQuantity(2);
	$pl->setCost(80000);
	$pl->setM(6);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(8);
	$pl->setRace($dwarf);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.blitzer");
	$pl->setQuantity(2);
	$pl->setCost(80000);
	$pl->setM(5);
	$pl->setF(3);
	$pl->setAG(3);
	$pl->setAR(9);
	$pl->setRace($dwarf);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.trollslayer");
	$pl->setQuantity(2);
	$pl->setCost(90000);
	$pl->setM(5);
	$pl->setF(3);
	$pl->setAG(2);
	$pl->setAR(8);
	$pl->setRace($dwarf);
	$manager->persist($pl);

	$pl = new Player();
	$pl->setPosition("player.position.deathroller");
	$pl->setQuantity(1);
	$pl->setCost(170000);
	$pl->setM(4);
	$pl->setF(7);
	$pl->setAG(1);
	$pl->setAR(10);
	$pl->setRace($dwarf);
	$manager->persist($pl);


	$manager->flush();
    }
}
