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
        $table->addColumn('path','string', ['limit' => 255, 'null' => false])
            ->addColumn('type','string', ['limit' => 255, 'null' => false])
            ->addColumn('size','integer', ['null' => false])
            ->addColumn('owner_id','integer', ['signed' => false, 'null' => false])
            ->addColumn('updated_at','datetime', ['null' => false])
            ->addColumn('created_at','datetime', ['null' => false])
            ->addForeignKey('owner_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE', 'constraint' => 'fk_users_profile_img_owner'])
            ->create();
    }

    public function down(): void
    {
        $this->table('users_profile_img')->drop()->save();
    }
}
