<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsrGrp extends Model
{
    use HasFactory;

    protected $table = 'usr_grps';
    protected $primaryKey = ['user_id', 'user_group_id'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'user_group_id'
    ];
}
