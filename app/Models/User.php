<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{ 
    protected $table="users";
    protected $allowedfield=['email','password'];
    protected $primaryKey       = 'id';

    public function createUser($data)
    {
        return $this->insert($data);
    }
 


}