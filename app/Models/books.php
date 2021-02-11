<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table ='books';

    public $fillable = [
        'Title',
        'Author',
        'Genre',
        'Height',
        'Publisher',
        'Stock',
        'updated_at',
        'created_at'
    ];
}
