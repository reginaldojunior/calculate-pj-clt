<?php

namespace App\Service;

abstract class ContractAbstract implements Contract
{

    protected $remunerationByMonth;
    protected $remunerationVariableByMonth;
    protected $sumSalaryYearlyBrute;
    protected $hasVacacy = true;
    protected $percentageVariableRemuneration = false;
    protected $mealTicketByMonth;
    protected $medicalAssistenceByMonth;
    protected $parkingCarByMonth;
    protected $cellphoneAssistenceByMonth;
    protected $othersValueBenefitiesByMonth;

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
        if ($this->hasVacacy) 
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

    /**
     * Get Thirty Remuneration
     *
     * @return float
     */
    public function getThirtyRemuneration()
    {
        return $this->remunerationByMonth;
    }

    /**
     * Set Percentage Remuneration Profit Sharing
     *
     * @param [float] $value
     * @return void
     */
    public function setPercentageByRemunerationProfitSharing($value)
    {
        $this->percentageVariableRemuneration = $value;
    }

    /**
     * Get Value Month Profit Sharing
     * Using remunerationByMonth multiplicate by quantity percentage divid per 100
     * @return float
     */
    public function getValueMonthProfitSharing()
    {
        $profitSharingValue = ($this->remunerationByMonth * $this->percentageVariableRemuneration) / 100;

        return $profitSharingValue;
    }

    /**
     * Set Meal Ticket By Month
     *
     * @param [float] $value
     * @return void
     */
    public function setMealTicketByMonth($value)
    {
        $this->mealTicketByMonth = $value;
    }

    /**
     * Get Meal Ticket By Month
     *
     * @return float
     */
    public function getMealTicketByMonth()
    {
        return $this->mealTicketByMonth;
    }

    /**
     * Set Medical Assistence By Month
     *
     * @param [float] $value
     * @return void
     */
    public function setMedicalAssistenceByMonth($value)
    {
        $this->medicalAssistenceByMonth = $value;
    }

    /**
     * Medical Assistence By Month
     *
     * @return float
     */
    public function getMedicalAssistenceByMonth()
    {
        return $this->medicalAssistenceByMonth;
    }

    /**
     * Set Parking Car By Month Assistence
     *
     * @param [float] $value
     * @return void
     */
    public function setParkingCarByMonth($value)
    {
        $this->parkingCarByMonth = $value;
    }

    /**
     * Get Parking Car Value By Month
     *
     * @return void
     */
    public function getParkingCarByMonth()
    {
        return $this->parkingCarByMonth;
    }

    /**
     * Set Cellphone Assistence By Month
     *
     * @param [float] $value
     * @return void
     */
    public function setCellphoneAssistanceByMonth($value)
    {
        $this->cellphoneAssistenceByMonth = $value;
    }

    /**
     * Get Cellphone Assistence By Month
     *
     * @return float
     */
    public function getCellphoneAssistanceByMonth()
    {
        return $this->cellphoneAssistenceByMonth;
    }

    /**
     * Set others benefities by month
     *
     * @param [float] $value
     * @return void
     */
    public function setOthersBenefitiesByMonth($value)
    {
        $this->othersValueBenefitiesByMonth = $value;
    }

    /**
     * Get others benefities by month
     *
     * @return float
     */    
    public function getOthersBenefitiesByMonth()
    {
        return $this->othersValueBenefitiesByMonth;
    }

}