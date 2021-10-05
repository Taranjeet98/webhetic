<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','slug','image','sub_title','description',];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
