<?php

use Codeception\Test\Unit;

class BranchClientsCountTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    public function testGet()
    {
        $result = $this->tester->getApi()->branchClientsCount()->get();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('error', $result);
        $this->assertEquals($result['error']['code'], 'access_denied');
    }

    protected function _before()
    {
    }

    // tests

    protected function _after()
    {
    }
}