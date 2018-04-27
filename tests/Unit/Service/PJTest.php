<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PJTest extends TestCase
{

    protected $PJ;

    public function setUp()
    {
        $this->PJ = new \App\Service\PJ;

        parent::setUp();
    }

    public function testSumSalaryYearlyBrute()
    {
        $this->PJ->setRemunerationByMonth(4000);
        $this->PJ->setRemunerationVariableByMonth(0);

        $this->assertEquals(48000, $this->PJ->sumSalaryYearlyBrute());
    }

}