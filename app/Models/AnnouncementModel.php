<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table            = 'announcements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['title', 'content', 'created_at'];
    
    // Enable timestamps if you want CodeIgniter to handle them
    protected $useTimestamps    = false;
    
    // Get all announcements ordered by created_at DESC (newest first)
    public function getAnnouncementsOrdered()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
}