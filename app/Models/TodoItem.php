<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'todo',
        'completed',
        'deadline', // Add the deadline attribute
    ];

    protected $dates = [
        'deadline', // Treat the 'deadline' attribute as a date
    ];
}
