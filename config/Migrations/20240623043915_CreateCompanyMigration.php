<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCompanyMigration extends AbstractMigration
{
    public function up(): void
    {
        $table = $this->table('company');
        $table->addColumn('name','string', ['limit' => 255, 'null' => false, 'comment' => '회사명 이름'])
            ->addColumn('icon','string', ['limit' => 255, 'null' => false, 'comment' => '회사 아이콘'])
            ->addColumn('remark','string', ['limit' => 255, 'null' => false, 'comment' => '설명'])
            ->addColumn('updated_at','datetime', ['null' => false, 'comment' => '수정일'])
            ->addColumn('created_at','datetime', ['null' => false, 'comment' => '생성일'])
            ->create();
    }

    public function down(): void
    {
        $this->table('company')->drop()->save();
    }
}
