<?php

namespace App\Service;
use App\Service\Contract;

class Calculate
{

    private $contract;

    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

    public function setRemunerationByMonth($value)
    {
        $this->contract->setRemunerationByMonth($value);
    }

    public function setRemunerationVariableByMonth($value)
    {
        $this->contract->setRemunerationVariableByMonth($value);
    }

    public function sumSalaryYearlyBrute()
    {
        return $this->contract->sumSalaryYearlyBrute();
    }


}