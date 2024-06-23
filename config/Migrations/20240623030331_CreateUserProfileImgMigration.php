<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUserProfileImgMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up(): void
    {
        $table = $this->table('users_profile_img');
        $table->addColumn('path','string', ['limit' => 255, 'null' => false, 'comment' => '경로'])
            ->addColumn('type','string', ['limit' => 255, 'null' => false, 'comment' => '미디어 타입'])
            ->addColumn('size','integer', ['null' => false, 'comment' => '파일 사이즈'])
            ->addColumn('owner_id','integer', ['signed' => false, 'null' => false, 'comment' => '소유자 고유번호'])
            ->addColumn('updated_at','datetime', ['null' => false, 'comment' => '수정일'])
            ->addColumn('created_at','datetime', ['null' => false, 'comment' => '생성일'])
            ->addForeignKey('owner_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE', 'constraint' => 'fk_users_profile_img_owner'])
            ->create();
    }

    public function down(): void
    {
        $this->table('users_profile_img')->drop()->save();
    }
}
