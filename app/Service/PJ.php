<?php

namespace App\Service;

class PJ extends ContractAbstract
{

    public function sumSalaryYearlyBrute()
    {
        $this->sumSalaryYearlyBrute = ($this->remunerationByMonth + $this->remunerationVariableByMonth) * 12;

        return $this->sumSalaryYearlyBrute;
    }

}