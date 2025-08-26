<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLessonsTable extends Migration
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
        'course_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            'unsigned'   => true,
        ],
        'lesson_title' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'lesson_content' => [
            'type' => 'LONGTEXT',
            'null' => true,
        ],
        'lesson_order' => [
            'type'       => 'INT',
            'constraint' => 11,
            'default'    => 1,
        ],
        'lesson_type' => [
            'type'       => 'ENUM',
            'constraint' => ['text', 'video', 'audio', 'pdf', 'interactive'],
            'default'    => 'text',
        ],
        'duration_minutes' => [
            'type'       => 'INT',
            'constraint' => 11,
            'null'       => true,
        ],
        'status' => [
            'type'       => 'ENUM',
            'constraint' => ['active', 'draft', 'archived'],
            'default'    => 'active',
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
    $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('lessons');
}

    public function down()
    {
    $this->forge->dropTable('lessons');
    }
}
