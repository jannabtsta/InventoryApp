<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shirts;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $table = 'categories';
    // Define the inverse one-to-many relationship
    public function shirts()
    {
        return $this->hasMany(Shirts::class);
    }
}
