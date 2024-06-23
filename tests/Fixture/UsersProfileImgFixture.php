<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersprofileimgFixture
 */
class UsersprofileimgFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'users_profile_img';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'path' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'size' => 1,
                'owner_id' => 1,
                'updated_at' => '2024-06-23 03:36:18',
                'created_at' => '2024-06-23 03:36:18',
            ],
        ];
        parent::init();
    }
}
