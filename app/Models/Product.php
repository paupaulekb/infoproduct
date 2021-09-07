<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'cat_id',
        'name',
        'img',
        'status',
        'user_id',
        'group_id',
        'DUP',
        'created_at',
        'updated_at',
    ];
}
