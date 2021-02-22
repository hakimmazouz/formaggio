<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    protected $with = [
        'submissions'
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function submissions() {
        return $this->hasMany(Submission::class);
    }
}
