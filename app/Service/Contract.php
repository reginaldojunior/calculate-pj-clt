<?php

namespace App\Service;

interface Contract 
{

    public function setRemunerationByMonth($value);

    public function setRemunerationVariableByMonth($value);
    
    public function sumSalaryYearlyBrute();

    public function sumValueVacacy();

    public function getThirtyRemuneration();
    
    public function setPercentageByRemunerationProfitSharing($value);

    public function getValueMonthProfitSharing();

    public function setMealTicketByMonth($value);

    public function getMealTicketByMonth();

    public function setMedicalAssistenceByMonth($value);

    public function getMedicalAssistenceByMonth();

    public function setParkingCarByMonth($value);

    public function getParkingCarByMonth();

    public function setCellphoneAssistanceByMonth($value);

    public function getCellphoneAssistanceByMonth();

    public function setOthersBenefitiesByMonth($value);

    public function getOthersBenefitiesByMonth();

}