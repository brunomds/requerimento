<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoginsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoginsTable Test Case
 */
class LoginsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LoginsTable
     */
    public $Logins;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Logins') ? [] : ['className' => 'App\Model\Table\LoginsTable'];
        $this->Logins = TableRegistry::get('Logins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logins);

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
}
