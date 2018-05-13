<?php

namespace App\Service;

class PJ extends ContractAbstract
{

    protected $hasVacacy = false;

    public function sumSalaryYearlyBrute()
    {
        $this->sumSalaryYearlyBrute = ($this->remunerationByMonth + $this->remunerationVariableByMonth) * 12;

        return $this->sumSalaryYearlyBrute;
    }

}