<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubmissionsTable extends Migration
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
        'student_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            'unsigned'   => true,
        ],
        'quiz_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            'unsigned'   => true,
        ],
        'student_answer' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'is_correct' => [
            'type'       => 'BOOLEAN',
            'default'    => false,
        ],
        'points_earned' => [
            'type'       => 'INT',
            'constraint' => 11,
            'default'    => 0,
        ],
        'submission_time' => [
        'type' => 'DATETIME',
        'null' => true,  
        ],
        'graded' => [
            'type'    => 'BOOLEAN',
            'default' => false,
        ],
        'feedback' => [
            'type' => 'TEXT',
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
    $this->forge->addForeignKey('student_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('quiz_id', 'quizzes', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('submissions');
}

    public function down()
    {
    $this->forge->dropTable('submissions');
    }
}
