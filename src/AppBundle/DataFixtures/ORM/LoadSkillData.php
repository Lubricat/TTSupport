<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Skill;

class LoadSkillData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
            /*** General ***/

        $block = new Skill();
        $block->setName("skill.block.name");
        $block->setDescription("skill.block.description");
        $block->setCategory("G");	
        $manager->persist($block);

        $dauntless = new Skill();
        $dauntless->setName("skill.dauntless.name");
        $dauntless->setDescription("skill.dauntless.description");
        $dauntless->setCategory("G");	
        $manager->persist($dauntless);

        $dirtyplayer = new Skill();
        $dirtyplayer->setName("skill.dirtyplayer.name");
        $dirtyplayer->setDescription("skill.dirtyplayer.description");
        $dirtyplayer->setCategory("G");	
        $manager->persist($dirtyplayer);

        $fend = new Skill();
        $fend->setName("skill.fend.name");
        $fend->setDescription("skill.fend.description");
        $fend->setCategory("G");	
        $manager->persist($fend);

        $frenzy = new Skill();
        $frenzy->setName("skill.frenzy.name");
        $frenzy->setDescription("skill.frenzy.description");
        $frenzy->setCategory("G");	
        $manager->persist($frenzy);

        $kick = new Skill();
        $kick->setName("skill.kick.name");
        $kick->setDescription("skill.kick.description");
        $kick->setCategory("G");	
        $manager->persist($kick);

        $kickoffreturn = new Skill();
        $kickoffreturn->setName("skill.kickoffreturn.name");
        $kickoffreturn->setDescription("skill.kickoffreturn.description");
        $kickoffreturn->setCategory("G");	
        $manager->persist($kickoffreturn);

        $passblock = new Skill();
        $passblock->setName("skill.passblock.name");
        $passblock->setDescription("skill.passblock.description");
        $passblock->setCategory("G");	
        $manager->persist($passblock);

        $pro = new Skill();
        $pro->setName("skill.pro.name");
        $pro->setDescription("skill.pro.description");
        $pro->setCategory("G");	
        $manager->persist($pro);

        $shadowing = new Skill();
        $shadowing->setName("skill.shadowing.name");
        $shadowing->setDescription("skill.shadowing.description");
        $shadowing->setCategory("G");	
        $manager->persist($shadowing);

        $stripball = new Skill();
        $stripball->setName("skill.stribvall.name");
        $stripball->setDescription("skill.stripball.description");
        $stripball->setCategory("G");	
        $manager->persist($stripball);

        $surehands = new Skill();
        $surehands->setName("skill.surehands.name");
        $surehands->setDescription("skill.surehands.description");
        $surehands->setCategory("G");	
        $manager->persist($surehands);

        $tackle = new Skill();
        $tackle->setName("skill.tackle.name");
        $tackle->setDescription("skill.tackle.description");
        $tackle->setCategory("G");	
        $manager->persist($tackle);

        $wrestle = new Skill();
        $wrestle->setName("skill.wrestle.name");
        $wrestle->setDescription("skill.wrestle.description");
        $wrestle->setCategory("G");	
        $manager->persist($wrestle);


            /*** Agility ***/

        $catch = new Skill();
        $catch->setName("skill.catch.name");
        $catch->setDescription("skill.catch.description");
        $catch->setCategory("A");	
        $manager->persist($catch);

        $divingcatch = new Skill();
        $divingcatch->setName("skill.divingcatch.name");
        $divingcatch->setDescription("skill.divingcatch.description");
        $divingcatch->setCategory("A");	
        $manager->persist($divingcatch);

        $divingtackle = new Skill();
        $divingtackle->setName("skill.divingtackle.name");
        $divingtackle->setDescription("skill.divingtackle.description");
        $divingtackle->setCategory("A");	
        $manager->persist($divingtackle);

        $dodge = new Skill();
        $dodge->setName("skill.dodge.name");
        $dodge->setDescription("skill.dodge.description");
        $dodge->setCategory("A");	
        $manager->persist($dodge);

        $jumpup = new Skill();
        $jumpup->setName("skill.jumpup.name");
        $jumpup->setDescription("skill.jumpup.description");
        $jumpup->setCategory("A");	
        $manager->persist($jumpup);

        $leap = new Skill();
        $leap->setName("skill.leap.name");
        $leap->setDescription("skill.leap.description");
        $leap->setCategory("A");	
        $manager->persist($leap);

        $sidestep = new Skill();
        $sidestep->setName("skill.sidestep.name");
        $sidestep->setDescription("skill.sidestep.description");
        $sidestep->setCategory("A");	
        $manager->persist($sidestep);

        $sneakygit = new Skill();
        $sneakygit->setName("skill.sneakygit.name");
        $sneakygit->setDescription("skill.sneakygit.description");
        $sneakygit->setCategory("A");	
        $manager->persist($sneakygit);

        $sprint = new Skill();
        $sprint->setName("skill.sprint.name");
        $sprint->setDescription("skill.sprint.description");
        $sprint->setCategory("A");	
        $manager->persist($sprint);

        $surefeet = new Skill();
        $surefeet->setName("skill.surefeet.name");
        $surefeet->setDescription("skill.surefeet.description");
        $surefeet->setCategory("A");	
        $manager->persist($surefeet);


            /*** Passing ***/

        $accurate = new Skill();
        $accurate->setName("skill.accurate.name");
        $accurate->setDescription("skill.accurate.description");
        $accurate->setCategory("P");	
        $manager->persist($accurate);

        $dumpoff = new Skill();
        $dumpoff->setName("skill.dumpoff.name");
        $dumpoff->setDescription("skill.dumpoff.description");
        $dumpoff->setCategory("P");	
        $manager->persist($dumpoff);

        $hailmarypass = new Skill();
        $hailmarypass->setName("skill.hailmarypass.name");
        $hailmarypass->setDescription("skill.hailmarypass.description");
        $hailmarypass->setCategory("P");	
        $manager->persist($hailmarypass);

        $leader = new Skill();
        $leader->setName("skill.leader.name");
        $leader->setDescription("skill.leader.description");
        $leader->setCategory("P");	
        $manager->persist($leader);

        $nervesofsteel = new Skill();
        $nervesofsteel->setName("skill.nervesofsteel.name");
        $nervesofsteel->setDescription("skill.nervesofsteel.description");
        $nervesofsteel->setCategory("P");	
        $manager->persist($nervesofsteel);

        $pass = new Skill();
        $pass->setName("skill.pass.name");
        $pass->setDescription("skill.pass.description");
        $pass->setCategory("P");	
        $manager->persist($pass);

        $safethrow = new Skill();
        $safethrow->setName("skill.safethrow.name");
        $safethrow->setDescription("skill.safethrow.description");
        $safethrow->setCategory("P");	
        $manager->persist($safethrow);


            /*** Strengh ***/

        $breaktackle = new Skill();
        $breaktackle->setName("skill.breaktackle.name");
        $breaktackle->setDescription("skill.breaktackle.description");
        $breaktackle->setCategory("S");	
        $manager->persist($breaktackle);

        $grab = new Skill();
        $grab->setName("skill.grab.name");
        $grab->setDescription("skill.grab.description");
        $grab->setCategory("S");	
        $manager->persist($grab);

        $guard = new Skill();
        $guard->setName("skill.guard.name");
        $guard->setDescription("skill.guard.description");
        $guard->setCategory("S");	
        $manager->persist($guard);

        $juggernaut = new Skill();
        $juggernaut->setName("skill.juggernaut.name");
        $juggernaut->setDescription("skill.juggernaut.description");
        $juggernaut->setCategory("S");	
        $manager->persist($juggernaut);

        $mightyblow = new Skill();
        $mightyblow->setName("skill.mightyblow.name");
        $mightyblow->setDescription("skill.mightyblow.description");
        $mightyblow->setCategory("S");	
        $manager->persist($mightyblow);

        $multipleblock = new Skill();
        $multipleblock->setName("skill.multipleblock.name");
        $multipleblock->setDescription("skill.multipleblock.description");
        $multipleblock->setCategory("S");	
        $manager->persist($multipleblock);

        $pillingon = new Skill();
        $pillingon->setName("skill.pillingon.name");
        $pillingon->setDescription("skill.pillingon.description");
        $pillingon->setCategory("S");	
        $manager->persist($pillingon);

        $standfirm = new Skill();
        $standfirm->setName("skill.standfirm.name");
        $standfirm->setDescription("skill.standfirm.description");
        $standfirm->setCategory("S");	
        $manager->persist($standfirm);

        $strongarm = new Skill();
        $strongarm->setName("skill.strongarm.name");
        $strongarm->setDescription("skill.strongarm.description");
        $strongarm->setCategory("S");	
        $manager->persist($strongarm);

        $thickskull = new Skill();
        $thickskull->setName("skill.thickskull.name");
        $thickskull->setDescription("skill.thickskull.description");
        $thickskull->setCategory("S");	
        $manager->persist($thickskull);


            /*** Mutation ***/

        $bighand = new Skill();
        $bighand->setName("skill.bighand.name");
        $bighand->setDescription("skill.bighand.description");
        $bighand->setCategory("M");	
        $manager->persist($bighand);

        $claw = new Skill();
        $claw->setName("skill.claw.name");
        $claw->setDescription("skill.claw.description");
        $claw->setCategory("M");	
        $manager->persist($claw);

        $disturbingpresence = new Skill();
        $disturbingpresence->setName("skill.disturbingpresence.name");
        $disturbingpresence->setDescription("skill.disturbingpresence.description");
        $disturbingpresence->setCategory("M");	
        $manager->persist($disturbingpresence);

        $extraarms = new Skill();
        $extraarms->setName("skill.extraarms.name");
        $extraarms->setDescription("skill.extraarms.description");
        $extraarms->setCategory("M");	
        $manager->persist($extraarms);

        $foulappearance = new Skill();
        $foulappearance->setName("skill.foulappearance.name");
        $foulappearance->setDescription("skill.foulappearance.description");
        $foulappearance->setCategory("M");	
        $manager->persist($foulappearance);

        $horns = new Skill();
        $horns->setName("skill.horns.name");
        $horns->setDescription("skill.horns.description");
        $horns->setCategory("M");	
        $manager->persist($horns);

        $prehensiletail = new Skill();
        $prehensiletail->setName("skill.prehensiletail.name");
        $prehensiletail->setDescription("skill.prehensiletail.description");
        $prehensiletail->setCategory("M");	
        $manager->persist($prehensiletail);

        $tentacles = new Skill();
        $tentacles->setName("skill.tentacles.name");
        $tentacles->setDescription("skill.tentacles.description");
        $tentacles->setCategory("M");	
        $manager->persist($tentacles);

        $twoheads = new Skill();
        $twoheads->setName("skill.twoheads.name");
        $twoheads->setDescription("skill.twoheads.description");
        $twoheads->setCategory("M");	
        $manager->persist($twoheads);

        $verylonglegs = new Skill();
        $verylonglegs->setName("skill.verylonglegs.name");
        $verylonglegs->setDescription("skill.verylonglegs.description");
        $verylonglegs->setCategory("M");	
        $manager->persist($verylonglegs);


            /*** Extraordinary ***/

        $alwayshungry = new Skill();
        $alwayshungry->setName("skill.alwayshungry.name");
        $alwayshungry->setDescription("skill.alwayshungry.description");
        $alwayshungry->setCategory("E");	
        $manager->persist($alwayshungry);

        $bonehead = new Skill();
        $bonehead->setName("skill.bonehead.name");
        $bonehead->setDescription("skill.bonehead.description");
        $bonehead->setCategory("E");	
        $manager->persist($bonehead);

        $chainsaw = new Skill();
        $chainsaw->setName("skill.chainsaw.name");
        $chainsaw->setDescription("skill.chainsaw.description");
        $chainsaw->setCategory("E");	
        $manager->persist($chainsaw);

        $loner = new Skill();
        $loner->setName("skill.loner.name");
        $loner->setDescription("skill.loner.description");
        $loner->setCategory("E");	
        $manager->persist($loner);

        $nohands = new Skill();
        $nohands->setName("skill.nohands.name");
        $nohands->setDescription("skill.nohands.description");
        $nohands->setCategory("E");	
        $manager->persist($nohands);

        $reallystupid = new Skill();
        $reallystupid->setName("skill.reallystupid.name");
        $reallystupid->setDescription("skill.reallystupid.description");
        $reallystupid->setCategory("E");	
        $manager->persist($reallystupid);

        $regeneration = new Skill();
        $regeneration->setName("skill.regeneration.name");
        $regeneration->setDescription("skill.regeneration.description");
        $regeneration->setCategory("E");	
        $manager->persist($regeneration);

        $rightstuff = new Skill();
        $rightstuff->setName("skill.rightstuff.name");
        $rightstuff->setDescription("skill.rightstuff.description");
        $rightstuff->setCategory("E");	
        $manager->persist($rightstuff);

        $secretweapon = new Skill();
        $secretweapon->setName("skill.secretweapon.name");
        $secretweapon->setDescription("skill.secretweapon.description");
        $secretweapon->setCategory("E");	
        $manager->persist($secretweapon);

        $stab = new Skill();
        $stab->setName("skill.stab.name");
        $stab->setDescription("skill.stab.description");
        $stab->setCategory("E");	
        $manager->persist($stab);

        $stunty = new Skill();
        $stunty->setName("skill.stunty.name");
        $stunty->setDescription("skill.stunty.description");
        $stunty->setCategory("E");	
        $manager->persist($stunty);

        $takeroot = new Skill();
        $takeroot->setName("skill.takeroot.name");
        $takeroot->setDescription("skill.takeroot.description");
        $takeroot->setCategory("E");	
        $manager->persist($takeroot);

        $throwteammate = new Skill();
        $throwteammate->setName("skill.throwteammate.name");
        $throwteammate->setDescription("skill.throwteammate.description");
        $throwteammate->setCategory("E");	
        $manager->persist($throwteammate);

        $weepingdagger = new Skill();
        $weepingdagger->setName("skill.weepingdagger.name");
        $weepingdagger->setDescription("skill.weepingdagger.description");
        $weepingdagger->setCategory("E");	
        $manager->persist($weepingdagger);

        $wildanimal = new Skill();
        $wildanimal->setName("skill.wildanimal.name");
        $wildanimal->setDescription("skill.wildanimal.description");
        $wildanimal->setCategory("E");	
        $manager->persist($wildanimal);

        $manager->flush();
    }
}
