<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    
    // Pastikan pakai 'nama', bukan 'name'
    protected $fillable = ['nip', 'nama', 'gender', 'alamat', 'email', 'foto'];
}