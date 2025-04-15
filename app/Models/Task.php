<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'user_id',
        'assigned_user',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
