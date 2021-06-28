<?php

namespace App\Domain\Cms\Models;

use App\Domain\Estore\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    use HasFactory;

    protected $connection = 'fpurnahar_cms';

    protected $table = 'role_users';

    protected $fillable = ['id', 'name'];

    public function user()
    {
        return $this->hasMany(Users::class);
    }
}
