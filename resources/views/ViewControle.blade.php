@extends('layouts.main')
@section('panneau_cntr')
<div  class=" small-up-3 medium-up-3 large-up-3 container ">
<div style="background-color: rgb(48, 61, 59); border-radius:10px;" class="small-up-3 medium-up-3 large-up-3 container  text-center" >
<h1 style="color :white;" >gérez les droit</h1>
</div>
<div >
<table  class="table table-striped">
    <tr>
        <th>ID</th>
        <th>nom</th>
        <th>Email</th>
        <th>utilisateur</th>
        <th>Administrateur</th>
        <th>Supprimer</th>
    </tr>
    @foreach($users as $user)
    <form action="/gererUser" method="POST"  >
        {{ csrf_field() }}
    <input type="hidden" name="id" value ="{{ $user->id }}">
    <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
         <input name="role-user" onChange="this.form.submit()" type="checkbox" {{ $user->hasRole('User')? 'checked' :' ' }}>
        </td>
        <td>
        <input name="role-admin" onChange="this.form.submit()" type="checkbox" {{ $user->hasRole('Admin')? 'checked' :' ' }}> 
        </td>
        <td>
        <input name="supprimer" class="btn btn-danger"  type="submit" value="Supprimer" > 
        </td>
    </tr>
    </form>
    @endforeach
</table>
</div>
</div>
@endsection

@section('content')
<h1 class="p1">Panneau de controle</h1>
@endsection




