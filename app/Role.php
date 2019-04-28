<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{    //model table post: utiliser ce model pour ajouter, supprimer, modifier des roels 
    protected $table = 'roles';
    //créer une relation de role->user pour pouvoir affecter un role un user
    public function users(){
        return belongsToMany('App\User','user_role','role_id','user_id');
    }
}
