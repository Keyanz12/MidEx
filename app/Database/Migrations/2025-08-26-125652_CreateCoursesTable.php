<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'course_code' => [
            'type'       => 'VARCHAR',
            'constraint' => '20',
            'unique'     => true,
        ],
        'course_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'description' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'instructor_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            'unsigned'   => true,
        ],
        'credits' => [
            'type'       => 'INT',
            'constraint' => 2,
            'default'    => 3,
        ],
        'status' => [
            'type'       => 'ENUM',
            'constraint' => ['active', 'inactive', 'archived'],
            'default'    => 'active',
        ],
        'start_date' => [
            'type' => 'DATE',
            'null' => true,
        ],
        'end_date' => [
            'type' => 'DATE',
            'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('instructor_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('courses');
}

    public function down()
    {
    $this->forge->dropTable('courses');
    }
}
