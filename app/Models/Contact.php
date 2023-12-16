<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{ 
    protected $primaryKey = 'id_contact'; 

    protected $table = 'contacts';

    public $fillable=['id_contact', 'name', 'email', 'phone'];
   // use HasFactory;


   public function eventContacts()
   {
       return $this->hasMany('App\EventContact', 'id_rep_cont');
   }
}
