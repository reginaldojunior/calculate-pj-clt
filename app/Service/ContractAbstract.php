<?php

namespace App\Service;

abstract class ContractAbstract implements Contract
{

    protected $remunerationByMonth;
    protected $remunerationVariableByMonth;
    protected $sumSalaryYearlyBrute;
    protected $hasVacacy = true;

    /**
     * Set Remuneration By Month
     *
     * @param [float] $value
     * @return void
     */    
    public function setRemunerationByMonth($value)
    {
        $this->remunerationByMonth = $value;   
    }

    /**
     * Set Remuneration Variable By Month
     *
     * @param [float] $value
     * @return void
     */
    public function setRemunerationVariableByMonth($value)
    {
        $this->remunerationVariableByMonth = $value;
    }

    /**
     * Sum Value Vacacy, if has vacacy disponible
     *
     * @return float
     */
    public function sumValueVacacy()
    {
        if (!$hasVacacy) 
            return $this->remunerationByMonth;

        return 0.00;
    }

    /**
     * Sum Salary Yearly Brute, by Remuneration By Moth + Remuneration Variable By Month multliplicate by months of year
     *
     * @return float
     */
    public function sumSalaryYearlyBrute()
    {
        $this->sumSalaryYearlyBrute = ($this->remunerationByMonth + $this->remunerationVariableByMonth) * 11;

        return $this->sumSalaryYearlyBrute;
    }

}