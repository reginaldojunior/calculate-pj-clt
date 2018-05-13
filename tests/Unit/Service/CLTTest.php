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

}