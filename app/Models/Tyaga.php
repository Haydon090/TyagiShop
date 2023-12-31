<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Tyaga extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','size'];
    protected $table = 'tyagi';
}
