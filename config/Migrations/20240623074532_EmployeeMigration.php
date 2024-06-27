<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class EmployeeMigration extends AbstractMigration
{
    public function up(): void
    {
        $table = $this->table('employee');
        $table->addColumn('company_id','integer', ['signed'=>false, 'limit' => 255, 'null' => false, 'comment' => '회사 고유번호'])
            ->addColumn('employee_id','integer', ['signed'=>false, 'limit' => 255, 'null' => false, 'comment' => '직원 고유번호'])
            ->addColumn('status','string', ['limit' => 20, 'null' => false, 'comment' => '직원 상태'])
            ->addColumn('updated_at','datetime', ['null' => false, 'comment' => '수정일'])
            ->addColumn('created_at','datetime', ['null' => false, 'comment' => '생성일'])
            ->addForeignKey('employee_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE', 'constraint' => 'fk_employee_users'])
            ->addForeignKey('company_id', 'company', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE', 'constraint' => 'fk_employee_company'])
            ->create();
    }

    public function down(): void
    {
        $this->table('employee')->drop()->save();
    }
}
