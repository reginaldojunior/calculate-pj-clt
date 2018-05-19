<?php

namespace App\Service;

/**
 * Implements rules of contract to CLT remuneration
 */

class CLT extends ContractAbstract
{

    const VALUE_BASEAD_INSS = 171.77;
    const FACTOR_INSS = 13;
    const FACTOR_MULTIPLICATE_IRFF = 0.2;
    const VALUE_MIN_YEARLY_TO_IRFF = 9400;
    
    /**
     * Get One Third Vacacy
     * With remuneration current divid by three
     *
     * @return float
     */
    public function getOneThirdVacacy()
    {
        if ($this->hasVacacy) {
            $oneThirdVacacy = ($this->remunerationByMonth / 3);
            
            return number_format($oneThirdVacacy, 2);
        }

        return 0.00;
    }

    public function getINSSYearlyByRemuneration()
    {
        return self::FACTOR_INSS * self::VALUE_BASEAD_INSS;
    }

    /**
     * Rules to calc sum yearly remuneration, vacacy, PLR
     *
     * @return void
     */
    public function getIRFFYearlyByRemuneration()
    {
        $yearlyRemuneration = (
            $this->sumSalaryYearlyBrute() + 
            $this->sumValueVacacy() + 
            $this->getValueMonthProfitSharing()
        );

        $yearlyRemunerationFirstRule = $yearlyRemuneration * self::VALUE_BASEAD_INSS;

        if ($yearlyRemunerationFirstRule <= self::VALUE_MIN_YEARLY_TO_IRFF) {
            return 1163.77;
        }
        
        return 1163.77;
    }

}