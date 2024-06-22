<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'no' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => '',
                'created_at' => '2024-06-22 00:11:06',
                'updated_at' => '2024-06-22 00:11:06',
            ],
        ];
        parent::init();
    }
}
