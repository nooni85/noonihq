<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersMigration extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('username','string', ['limit' => 36, 'null' => false, 'comment' => '아이디'])
            ->addColumn('password','char', ['limit' => 60, 'null' => false, 'comment' => '비밀번호'])
            ->addColumn('firstname','string', ['limit' => 255, 'null' => false, 'comment' => '이름'])
            ->addColumn('lastname','string', ['limit' => 255, 'null' => false, 'comment' => '이름(성)'])
            ->addColumn('updated_at','datetime', ['null' => false, 'comment' => '수정일'])
            ->addColumn('created_at','datetime', ['null' => false, 'comment' => '생성일'])
            ->addIndex('username', ['unique' => true, 'name' => 'uix_users_username'])
            ->create();
    }

    public function down(): void 
    {
        $this->table('users')->drop()->save();
    }
}
