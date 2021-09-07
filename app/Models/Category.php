<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'parent_id',
        'img',
        'status',
        'user_id',
        'group_id',
        'DUP',
        'sort',
        'created_at',
        'updated_at',
    ];
}
