<?php

namespace App\Service;

interface Contract 
{

    public function setRemunerationByMonth($value);

    public function setRemunerationVariableByMonth($value);
    
    public function sumSalaryYearlyBrute();

}