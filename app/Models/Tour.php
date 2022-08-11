<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    // protected $fillable = ['name','description','price','image_url','imagedesc_url','location'];
    protected $guarded = ['id']; // field yang dilindungi, selain ini berarti fillable
}
