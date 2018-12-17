<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ken
 * Date: 27/11/2018
 * Time: 18:11
 */

namespace App\ShidoCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class Deck
 * @package App\ShidoCardBundle\Entity
 * @ORM\Entity
 * @ApiResource
 */
class Scenario
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Deck")
     * @ORM\JoinColumn(name="deck_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $deckId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Card")
     * @ORM\JoinColumn(name="init_card_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $initCardId;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int The id of the Deck.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The label of the card
     *
     * @ORM\Column(type="string")
     */
    private $label;

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
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getDeckId(): int
    {
        return $this->deckId;
    }

    /**
     * @param int $deckId
     */
    public function setDeckId(int $deckId): void
    {
        $this->deckId = $deckId;
    }

    /**
     * @return int
     */
    public function getInitCardId(): int
    {
        return $this->initCardId;
    }

    /**
     * @param int $initCardId
     */
    public function setInitCardId(int $initCardId): void
    {
        $this->initCardId = $initCardId;
    }
}