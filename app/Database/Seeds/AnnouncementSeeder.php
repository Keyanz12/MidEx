<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'      => 'Welcome to the New Academic Year!',
                'content'    => 'We are excited to welcome all students to the Academic Year 2025-2026. Please check your schedules and attend the orientation on the first day of classes.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Midterm Examination Schedule',
                'content'    => 'The midterm examinations will be held from October 20-25, 2025. Please review the examination guidelines posted on the bulletin board.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
            [
                'title'      => 'Library Hours Extended',
                'content'    => 'Good news! The library will now be open until 9:00 PM on weekdays to accommodate students studying for their exams.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
        ];

        // Insert data into announcements table
        $this->db->table('announcements')->insertBatch($data);
    }
}