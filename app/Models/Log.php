<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'tbl_log';

    protected $fillable = [
        'ip',
        'tag',
        'message',
        'created_at'
    ];
}
