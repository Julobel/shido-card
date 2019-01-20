<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ken
 * Date: 23/11/2018
 * Time: 15:58
 */

namespace App\ShidoCardBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Class Deck
 * @package App\ShidoCardBundle\Entity
 * @ORM\Entity
 * @ApiResource
 */
class Deck
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @ORM\OneToMany(targetEntity="Card", mappedBy="deck")
     */
    public $cards;


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

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $imageContent;

    //////////////////////////////////

    public function __construct()
    {
        $this->cards = new ArrayCollection();
    }

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
     * @return string
     */
    public function getImageContent(): string
    {
        return $this->imageContent;
    }

    /**
     * @param string $imageContent
     */
    public function setImageContent(string $imageContent): void
    {
        $this->imageContent = $imageContent;
    }

    /**
     * @return mixed
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     * @return Deck
     */
    public function setCards($cards): Deck
    {
        $this->cards = $cards;
        return $this;
    }
}