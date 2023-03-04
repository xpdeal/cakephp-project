<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagesTable Test Case
 */
class PagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagesTable
     */
    protected $Pages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pages') ? [] : ['className' => PagesTable::class];
        $this->Pages = $this->getTableLocator()->get('Pages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pages);

        parent::tearDown();
    }
}
