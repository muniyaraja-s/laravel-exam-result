<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model {
    use HasFactory;

    protected $fillable = [
        'reg_no',
        'mark_one',
        'mark_two',
        'mark_three',
        'exam_date',
    ];
}
