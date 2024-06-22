<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersProfileImgTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersProfileImgTable Test Case
 */
class UsersProfileImgTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersProfileImgTable
     */
    protected $UsersProfileImg;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.UsersProfileImg',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersProfileImg') ? [] : ['className' => UsersProfileImgTable::class];
        $this->UsersProfileImg = $this->getTableLocator()->get('UsersProfileImg', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsersProfileImg);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersProfileImgTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
