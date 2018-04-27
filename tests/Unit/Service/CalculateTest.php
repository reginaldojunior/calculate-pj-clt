<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalculateTest extends TestCase
{

    protected $calculate;

    public function testSumSalaryBruteByYearCLT()
    {
        $this->calculate = new \App\Service\Calculate(new \App\Service\CLT);

        $this->calculate->setRemunerationByMonth(2300);
        $this->calculate->setRemunerationVariableByMonth(0);

        $this->assertEquals(
            25300,
            $this->calculate->sumSalaryYearlyBrute()
        );
    }

    public function testSumSalaryBruteByYearPJ()
    {
        $this->calculate = new \App\Service\Calculate(new \App\Service\PJ);

        $this->calculate->setRemunerationByMonth(4000);
        $this->calculate->setRemunerationVariableByMonth(0);

        $this->assertEquals(
            48000,
            $this->calculate->sumSalaryYearlyBrute()
        );
    }

}