<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'fblog_posts'; // Sesuai nama tabel di phpMyAdmin Anda
    protected $guarded = [];
}