<?php

namespace App\Models;

use CodeIgniter\Model;

class FormHostingModel extends Model
{
    protected $table      = 'form_hosting';
    protected $primaryKey = 'id_hosting';
    protected $allowedFields = ['email', 'name', 'npm', 'subdomain', 'username', 'description'];
}