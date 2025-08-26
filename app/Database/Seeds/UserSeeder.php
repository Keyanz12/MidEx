<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
    $data = [

        [
            'username'   => 'admin',
            'email'      => 'admin@lms.com',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'role'       => 'admin',
            'first_name' => 'System',
            'last_name'  => 'Administrator',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        
        [
            'username'   => 'prof_smith',
            'email'      => 'john.smith@lms.com',
            'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
            'role'       => 'instructor',
            'first_name' => 'John',
            'last_name'  => 'Smith',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'username'   => 'prof_johnson',
            'email'      => 'mary.johnson@lms.com',
            'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
            'role'       => 'instructor',
            'first_name' => 'Mary',
            'last_name'  => 'Johnson',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        
        [
            'username'   => 'student001',
            'email'      => 'alice.brown@student.com',
            'password'   => password_hash('student123', PASSWORD_DEFAULT),
            'role'       => 'student',
            'first_name' => 'Alice',
            'last_name'  => 'Brown',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'username'   => 'student002',
            'email'      => 'bob.wilson@student.com',
            'password'   => password_hash('student123', PASSWORD_DEFAULT),
            'role'       => 'student',
            'first_name' => 'Bob',
            'last_name'  => 'Wilson',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'username'   => 'student003',
            'email'      => 'carol.davis@student.com',
            'password'   => password_hash('student123', PASSWORD_DEFAULT),
            'role'       => 'student',
            'first_name' => 'Carol',
            'last_name'  => 'Davis',
            'status'     => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
    ];

    $this->db->table('users')->insertBatch($data);
    }
}
