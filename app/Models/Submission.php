<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'form_id'
    ];

    protected $casts = [
        'content' => 'array'
    ];

    public function form() {
        return $this->belongsTo(Form::class);
    }
}
