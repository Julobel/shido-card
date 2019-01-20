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


        $image ="https://source.unsplash.com/1600x400";
        $cards = array();
        $scenarios = array();
        for ($i = 1; $i < 11; $i++) {

            // CARDS
            $card = new Card();
            $card->setLabel('Card Label ' . $i);
            $card->setImageContent($image);
            $card->setTextContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. '
            );
            $card->setFirstChoiceText('Choix 1');
            $card->setSecondChoiceText('Choix 2');
            $card->setDeck(1);
            $manager->persist($card);

            $cards[] = $card;

            // SCENARIOS
            $scenario = new Scenario();
            $scenario->setLabel('Scenario Label ' . $i);
            $scenario->setDeckId($i);
            $scenario->setInitCardId($i);
            $scenario->setBackgroundImg($image);
            $scenario->setStartButtonText('Start Button ' . $i);
            $scenario->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. ');
            $manager->persist($scenario);
            $scenarios[] = $scenario;

            // DECKS
            $deck = new Deck();
            $deck->setLabel('Deck Label ' . $i);
            $deck->setImageContent($image);
            $manager->persist($deck);


        }

        for ($i = 1; $i < 11; $i++) {
            for ($l=1; $l < 11; $l++) { 
                $scenarioCard = new ScenarioCard();
                $scenarioCard->setScenarioId($i);
                $scenarioCard->setCardId($l);
                $scenarioCard->setCard($cards[$l - 1]);
                $scenarioCard->setScenario($scenarios[$i - 1]);
                $scenarioCard->setFinalCardId($i == $l ? 1 : 0);
                $scenarioCard->setFistChoiceCardId($l + 1 > 10 ? 1 : $l + 1);
                $scenarioCard->setSecondChoiceCarId(10 - $l < 1 ? 10 : 10 - $l);
                $manager->persist($scenarioCard);
            }
        }

        $manager->flush();
    }
}
