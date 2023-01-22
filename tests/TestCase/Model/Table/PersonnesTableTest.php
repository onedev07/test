<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonnesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonnesTable Test Case
 */
class PersonnesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonnesTable
     */
    protected $Personnes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Personnes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Personnes') ? [] : ['className' => PersonnesTable::class];
        $this->Personnes = $this->getTableLocator()->get('Personnes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Personnes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PersonnesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
