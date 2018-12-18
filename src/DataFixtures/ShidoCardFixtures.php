<?php

namespace App\DataFixtures;

use App\ShidoCardBundle\Entity\Card;
use App\ShidoCardBundle\Entity\Deck;
use App\ShidoCardBundle\Entity\Scenario;
use App\ShidoCardBundle\Entity\ScenarioCard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShidoCardFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $deck = new Deck();
            $deck->setLabel('Deck Label ' . $i);
            $deck->setImageContent('assets/img/deck/' . $i);
            $manager->persist($deck);

            $card = new Card();
            $card->setLabel('Card Label ' . $i);
            $card->setImageContent('assets/img/card/' . $i);
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
            $scenario->setBackgroundImg('assets/img/card/' . $i);
            $scenario->setStartButtonText('Start Button ' . $i);
            $scenario->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. ');
            $manager->persist($scenario);

            $scenarioCard = new ScenarioCard();
            $scenarioCard->setScenarioId($i);
            $scenarioCard->setCardId($i);
            $scenarioCard->setFinalCardId($i);
            $scenarioCard->setFistChoiceCardId($i);
            $scenarioCard->setSecondChoiceCarId($i);
            $manager->persist($scenarioCard);
        }

        $manager->flush();
    }
}
