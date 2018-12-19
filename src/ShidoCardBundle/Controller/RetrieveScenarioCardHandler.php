<?php
namespace App\ShidoCardBundle\Controller;

use App\ShidoCardBundle\Entity\ScenarioCard;

class RetrieveScenarioCardHandler{
    public function handle(ScenarioCard $scenarioCard){
    
        return $scenarioCard;
    }
}