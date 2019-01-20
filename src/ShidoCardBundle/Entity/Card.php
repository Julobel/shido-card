<?php
/**
 * Created by jules aubel on 23/11/18
 */

namespace App\ShidoCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Card
 * @package App\ShidoCardBundle\Entity
 * @ORM\Entity
 * @ApiResource
 */
class Card
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @ORM\ManyToOne(targetEntity="Deck", inversedBy="cards")
     * @ORM\JoinColumn(name="deck_id", referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
    public $deck;


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int The id of the card.
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
     * @Groups({"card"})
     */
    private $label;

    /**
     * @var string The text content of the card
     *
     * @ORM\Column(type="text")
     * @Groups({"card"})
     */
    private $textContent;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $imageContent;

    /**
     * @var string The text of the first choice
     *
     * @ORM\Column(type="text")
     */
    private $firstChoiceText;

    /**
     * @var string The text of the first choice
     *
     * @ORM\Column(type="text")
     */
    private $secondChoiceText;

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
     * @return string
     */
    public function getTextContent(): string
    {
        return $this->textContent;
    }

    /**
     * @param string $textContent
     */
    public function setTextContent(string $textContent): void
    {
        $this->textContent = $textContent;
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
     * @return string
     */
    public function getFirstChoiceText(): string
    {
        return $this->firstChoiceText;
    }

    /**
     * @param string $firstChoiceText
     */
    public function setFirstChoiceText(string $firstChoiceText): void
    {
        $this->firstChoiceText = $firstChoiceText;
    }

    /**
     * @return string
     */
    public function getSecondChoiceText(): string
    {
        return $this->secondChoiceText;
    }

    /**
     * @param string $secondChoiceText
     */
    public function setSecondChoiceText(string $secondChoiceText): void
    {
        $this->secondChoiceText = $secondChoiceText;
    }

    /**
     * @return mixed
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * @param mixed $deck
     * @return Card
     */
    public function setDeck($deck): Card
    {
        $this->deck = $deck;
        return $this;
    }
}