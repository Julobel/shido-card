<?php

namespace App\DataFixtures;

use App\ShidoCardBundle\Entity\Card;
use App\ShidoCardBundle\Entity\Deck;
use App\ShidoCardBundle\Entity\Scenario;
use App\ShidoCardBundle\Entity\ScenarioCard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;



class ShidoCardFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $image ="https://source.unsplash.com/1600x400";
        for ($i = 0; $i < 10; $i++) {
            $deck = new Deck();
            $deck->setLabel('Deck Label ' . $i);
            $deck->setImageContent($image);
            $manager->persist($deck);



            $card = new Card();
            $card->setLabel('Card Label ' . $i);
            $card->setImageContent($image);
            $card->setTextContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. '
            );
            $card->setFirstChoiceText('Choix 1');
            $card->setSecondChoiceText('Choix 2');
            $manager->persist($card);

            $scenario = new Scenario();
            $scenario->setLabel('Scenario Label ' . $i);
            $scenario->setDeckId($i);
            $scenario->setInitCardId($i);
            $scenario->setBackgroundImg($image);
            $scenario->setStartButtonText('Start Button ' . $i);
            $scenario->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. ');
            $manager->persist($scenario);

            for ($l=0; $l < 10; $l++) { 
                $scenarioCard = new ScenarioCard();
                $scenarioCard->setScenarioId($i);
                $scenarioCard->setCardId($l);
                $scenarioCard->setFinalCardId($i == $l ? 1 : 0);
                $scenarioCard->setFistChoiceCardId($l + 1 > 10 ? 0 : $l + 1);
                $scenarioCard->setSecondChoiceCarId(10 - $l < 0 ? 10 : 10 - $l);
                $manager->persist($scenarioCard);
            }


        }

        $manager->flush();
    }
}
