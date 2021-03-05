<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // jika tetap menggunakan tabel mahasiswa di phpmyadmin, tanpa membuat tabel baru
    protected $table = "mahasiswa";
}
