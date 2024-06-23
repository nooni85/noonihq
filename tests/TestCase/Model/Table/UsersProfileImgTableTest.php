<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersprofileimgTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersprofileimgTable Test Case
 */
class UsersprofileimgTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersprofileimgTable
     */
    protected $Usersprofileimg;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Usersprofileimg',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usersprofileimg') ? [] : ['className' => UsersprofileimgTable::class];
        $this->Usersprofileimg = $this->getTableLocator()->get('Usersprofileimg', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Usersprofileimg);

        parent::tearDown();
    }
}
