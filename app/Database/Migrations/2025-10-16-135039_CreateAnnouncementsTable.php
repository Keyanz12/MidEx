<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAnnouncementsTable extends Migration
{
    public function up()
    {
        // Create announcements table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true); // Primary Key
        $this->forge->createTable('announcements');
    }

    public function down()
    {
        // Drop the table if migration is rolled back
        $this->forge->dropTable('announcements');
    }
}
