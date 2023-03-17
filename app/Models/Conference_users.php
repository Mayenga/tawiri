<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference_users extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'country',
        'nation',
        'company',
        'website'
    ];
}
