<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'articles';
    protected $fillable = ['text'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
