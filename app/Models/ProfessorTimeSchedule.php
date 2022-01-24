<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorTimeSchedule extends Model
{
    use HasFactory;
    protected $table = "professor_time_schedules";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'professor_id',
        'file_name',

    ];
}
