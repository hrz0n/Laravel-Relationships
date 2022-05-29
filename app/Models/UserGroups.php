<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    use HasFactory;

    protected $table = 'user_groups';
    protected $primaryKey = 'user_group_id';
    protected $fillable = [
        'group_name'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, UsrGrp::class, 'user_group_id', 'user_id', 'user_group_id');
    }
}
