<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    // public $fillable = [
    //     'nama',
    //     'email',
    //     'password',
    //     'role',
    //     'aktif'
    // ];
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    protected $table = "users";
}
