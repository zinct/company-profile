<?php namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
  protected $table = 'comments';
  protected $primaryKey = 'id';

  protected $allowedFields = ['name', 'email', 'phone', 'company', 'message'];
  protected $useTimestamps = true;
}