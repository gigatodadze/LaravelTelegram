<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable = [
        'name', 'age', 'status'
    ];

    public function error()
    {
        return $this->hasMany(Error::class);
    }

}
