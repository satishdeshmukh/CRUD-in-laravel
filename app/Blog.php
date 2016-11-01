<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blog';
    /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
