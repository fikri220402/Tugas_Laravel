<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function Post()
    {
        $User = Post::find(1)->User;
        dd($User);

        $Post = Post::find(1);

        $User = User::find(10);

        $Post->user()->associate($User)->save();
        return $this->hasOne('App\Models\User');
    }
    
}
