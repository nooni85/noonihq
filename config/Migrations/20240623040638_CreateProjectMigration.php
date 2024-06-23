<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProjectMigration extends AbstractMigration
{
    public function up(): void
    {
        $table = $this->table('project');
        $table->addColumn('path','string', ['limit' => 255, 'null' => false])
            ->addColumn('updated_at','datetime', ['null' => false, 'comment' => '수정일'])
            ->addColumn('created_at','datetime', ['null' => false, 'comment' => '생성일'])
            ->create();
    }

    public function down(): void
    {
        $this->table('project')->drop()->save();
    }
}
