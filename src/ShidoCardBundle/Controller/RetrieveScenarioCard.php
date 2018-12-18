<?php
namespace App\ShidoCardBundle\Controller;

use App\ShidoCardBundle\Entity\ScenarioCard;

class RetrieveScenarioCard
{
    private $retrieveScenarioCardHandler;

    public function __construct(RetrieveScenarioCardHandler $retrieveScenarioCardHandler)
    {
        $this->retrieveScenarioCardHandler = $retrieveScenarioCardHandler;
    }

    public function __invoke(ScenarioCard $data): ScenarioCard
    {
        $this->retrieveScenarioCardHandler->handle($data);
        return $data;
    }
}

