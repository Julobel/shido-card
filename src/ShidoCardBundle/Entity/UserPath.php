<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ken
 * Date: 19/12/2018
 * Time: 15:19
 */

namespace App\ShidoCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class UserPath
 * @package App\ShidoCardBundle\Entity
 * @ORM\Entity
 * @ApiResource
 */

class UserPath
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int The id of the UserPath.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     * @ORM\Column(type="integer")
     */
    private $UserId;

    /**
     * @var string The id of the UserPath.
     *
     * @ORM\Column(type="string")
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="ShidoCardBundle\Entity\Scenario")
     * @ORM\JoinColumn(name="scenario_id", referencedColumnName="id", onDelete="CASCADE")
     * @ORM\Column(type="integer")
     */
    private $ScenarioId;

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
    public function getUserId(): int
    {
        return $this->UserId;
    }

    /**
     * @param int $UserId
     */
    public function setUserId(int $UserId): void
    {
        $this->UserId = $UserId;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return int
     */
    public function getScenarioId(): int
    {
        return $this->ScenarioId;
    }

    /**
     * @param int $ScenarioId
     */
    public function setScenarioId(int $ScenarioId): void
    {
        $this->ScenarioId = $ScenarioId;
    }


}