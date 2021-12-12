<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{

    protected $table = 'telegram_users';
    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable = [
        'name','age','status'
    ];
}
