<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // mana yg boleh di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // mana yang di lindungi
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
