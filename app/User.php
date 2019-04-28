<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //relation user roles 
    public function roles(){
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }
    //attribut un ou plusieurs roles à un user
    public function hasAnyRole($roles){
        //si on a plusieurs roles pour un user => $roles = tableau
        if(is_array($roles))
        {   //parcourir le tableau de roles
            foreach($roles as $role)
            {  //appel a la methode hasRole() qui affecter le role a l'utilisateur
                if($this->hasRole($role)){
                    return true;
                }
            }
        }
        //si on a un seul role
        else
        {
            if($this->hasRole($roles)){
                return true;
            }
        }
    }

    public function hasRole($role){
        if($this->roles()->where('nom', $role)->first()){
            return true;
        }
            return false;

    }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Post', 'post_author');
    }
}
