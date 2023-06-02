<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationModel extends Model
{
    use HasFactory;
    protected $table = 'notification';

    protected $fillable = [
        'title',
        'body',
        'type',
        'created_at',
        'updated_at'
    ];
}
