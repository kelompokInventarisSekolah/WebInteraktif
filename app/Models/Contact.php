<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $tabel = "contacts";
    protected $fillable = ['id_user','email','no_hp','message',];


}
