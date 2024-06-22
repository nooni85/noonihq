<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersProfileImgFixture
 */
class UsersProfileImgFixture extends TestFixture
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
                'no' => 1,
                'path' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'size' => 1,
                'created_at' => '2024-06-22 13:07:36',
                'updated_at' => '2024-06-22 13:07:36',
            ],
        ];
        parent::init();
    }
}
