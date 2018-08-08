<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{


    public function contact()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Agregamos el atributo contact_name al array devuelto 
     * 
     */

    protected $appends = ['contact_name'];

    /**
     * Accedemos mediante un Accessor al atributo contact para realizar
     * la respectiva consulta y obtener el nombre de los contactos.
     * 
     */
    public function getContactNameAttribute()
    {
        return $this->contact()->first(['name'])->name;
    }




}
