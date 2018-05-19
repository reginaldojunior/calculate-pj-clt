<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CLTTest extends TestCase
{

    protected $CLT;

    public function setUp()
    {
        $this->CLT = new \App\Service\CLT;

        parent::setUp();
    }

    public function testSumSalaryYearlyBrute()
    {
        $this->CLT->setRemunerationByMonth(2300);
        $this->CLT->setRemunerationVariableByMonth(0);

        $this->assertEquals(25300, $this->CLT->sumSalaryYearlyBrute());
    }

    public function testGetVacacy()
    {
        $this->CLT->setRemunerationByMonth(2300);

        $this->assertEquals(2300, $this->CLT->sumValueVacacy());
    }

    public function testGetOneThirdVacacy()
    {
        $this->CLT->setRemunerationBymonth(2300);

        $this->assertEquals(766.67, $this->CLT->getOneThirdVacacy());
    }

    public function testGetValueMonthProfitSharing()
    {
        $this->CLT->setPercentageByRemunerationProfitSharing(10);
        $this->CLT->setRemunerationByMonth(5000);

        $profitSharing = $this->CLT->getValueMonthProfitSharing();

        $this->assertEquals(500, $profitSharing);
    }

    public function testGetValueMonthProfitSharingWithDecimalNumber()
    {
        $this->CLT->setPercentageByRemunerationProfitSharing(1.5);
        $this->CLT->setRemunerationByMonth(5000);

        $profitSharing = $this->CLT->getValueMonthProfitSharing();

        $this->assertEquals(75, $profitSharing);
    }

    // Descontos anuais	R$ 3,488.78
    // INSS (salário, 13o. e férias)	R$ 2,233.01
    // IRPF (Simples - Dedução 20% ou R$9.400)	R$ 1,163.77
    // Vale refeição (anual) - Dedução 20%	R$ 12.00
    // Outros descontos anuais (sindical etc.)	R$ 80.00    
    public function testDiscountYearlyBaseadOnRemunerationAndBenefities()
    {
        $this->CLT->setRemunerationByMonth(2300);
        
        $inss = $this->CLT->getINSSYearlyByRemuneration();
        $irff = $this->CLT->getIRFFYearlyByRemuneration();

        $this->assertEquals(2233.01, $inss);
        $this->assertEquals(1163.77, $irff);
    }

}