<?php
/**
 * Created by jules aubel on 17/12/18
 */

namespace App\ShidoCardBundle\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ScenarioCard
 * @package App\ShidoCardBundle\Entity
 * @ORM\Entity
 * @ApiResource(
 *      normalizationContext={"groups"={"card"}}
 * )
 * @ApiFilter(SearchFilter::class, properties={"scenario": "exact", "card": "exact"})
 */
class ScenarioCard
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Scenario")
     * @ORM\JoinColumn(name="scenario_id", referencedColumnName="id", onDelete="CASCADE")
     * @Groups({"card"})
     */
    private $scenarioId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Card")
     * @ORM\JoinColumn(name="card_id", referencedColumnName="id", onDelete="CASCADE")
     * @Groups({"card"})
     */
    private $cardId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Card")
     * @ORM\JoinColumn(name="first_choice_card_id", referencedColumnName="id", onDelete="CASCADE")
     * @Groups({"card"})
     */
    private $fistChoiceCardId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Card")
     * @ORM\JoinColumn(name="second_choice_card_id", referencedColumnName="id", onDelete="CASCADE")
     * @Groups({"card"})
     */
    private $secondChoiceCardId;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"card"})
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Card")
     * @ORM\JoinColumn(name="second_choice_card_id", referencedColumnName="id", onDelete="CASCADE")
     * @Groups({"card"})
     */
    private $finalCardId;


    /**
     * @var Card
     * @ORM\ManyToOne(targetEntity="Card")
     * @Groups({"card"})
     */
    public $card;
    /**
     * @var Scenario
     * @ORM\ManyToOne(targetEntity="Scenario")
     * @Groups({"card"})
     */
    public $scenario;

    //////////////////////////////////

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getScenarioId(): int
    {
        return $this->scenarioId;
    }

    /**
     * @param int $scenarioId
     */
    public function setScenarioId(int $scenarioId): void
    {
        $this->scenarioId = $scenarioId;
    }

    /**
     * @return int
     */
    public function getCardId(): int
    {   
        return $this->cardId;
    }

    /**
     * @param int $cardId
     */
    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * @return int
     */
    public function getFistChoiceCardId(): int
    {
        return $this->fistChoiceCardId;
    }

    /**
     * @param int $fistChoiceCardId
     */
    public function setFistChoiceCardId(int $fistChoiceCardId): void
    {
        $this->fistChoiceCardId = $fistChoiceCardId;
    }

    /**
     * @return int
     */
    public function getSecondChoiceCardId(): int
    {
        return $this->secondChoiceCardId;
    }

    /**
     * @param int $secondChoiceCardId
     */
    public function setSecondChoiceCarId(int $secondChoiceCardId): void
    {
        $this->secondChoiceCardId = $secondChoiceCardId;
    }

    /**
     * @return int
     */
    public function getFinalCardId(): int
    {
        return $this->finalCardId;
    }

    /**
     * @param int $finalCardId
     */
    public function setFinalCardId(int $finalCardId): void
    {
        $this->finalCardId = $finalCardId;
    }
    

    /**
     * @param Card $card
     */
    public function setCard(Card $card): void
    {
        $this->card = $card;
    }
    /**
     * @param Scenario $scenario
     */
    public function setScenario(Scenario $scenario): void
    {
        $this->scenario = $scenario;
    }
}