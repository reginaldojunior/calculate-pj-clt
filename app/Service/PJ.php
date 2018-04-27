<?php

namespace App\Service;

class PJ implements Contract
{

    protected $remunerationByMonth;
    protected $remunerationVariableByMonth;
    protected $sumSalaryYearlyBrute;

    public function setRemunerationByMonth($value)
    {
        $this->remunerationByMonth = $value;   
    }

    public function setRemunerationVariableByMonth($value)
    {
        $this->remunerationVariableByMonth = $value;
    }

    public function sumSalaryYearlyBrute()
    {
        $this->sumSalaryYearlyBrute = ($this->remunerationByMonth + $this->remunerationVariableByMonth) * 12;

        return $this->sumSalaryYearlyBrute;
    }

}