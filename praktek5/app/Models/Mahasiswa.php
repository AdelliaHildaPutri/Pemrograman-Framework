<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = "mahasiswa";
    protected $primaryKey="nim";
    public $incrementing=false; // mematikan auto increment
    protected $keyType="string"; // custom type primary key (defaultnya autoincrement longint)
    protected $fillable  = ["nim", "nama","umur","email", "alamat" ];
    public $timestamps = true;
}