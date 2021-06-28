<?php

namespace App\Domain\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $connection = 'fpurnahar_cms';

    protected $table = 'users';

    protected $fillable = ['role_id', 'name', 'email', 'password'];

    public function role()
    {
        return $this->belongsTo(RoleUsers::class);
    }
}
