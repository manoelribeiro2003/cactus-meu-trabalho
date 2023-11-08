<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsavelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsavelsTable Test Case
 */
class ResponsavelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsavelsTable
     */
    public $Responsavels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.responsavels',
        'app.situations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsavels') ? [] : ['className' => ResponsavelsTable::class];
        $this->Responsavels = TableRegistry::getTableLocator()->get('Responsavels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsavels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
