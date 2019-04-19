@extends('layouts.main')
@section('panneau_cntr')
<div class="col-md-8 container jumbotron">
<h4>Panneau de controle</h4>
<div>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>nom</th>
        <th>Email</th>
        <th>utilisateur</th>
        <th>Administrateur</th>
    </tr>
    @foreach($users as $user)
    <form action="/ajoutRole" method="POST"  >
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
    </tr>
    </form>
    @endforeach
</table>
</div>
</div>
@endsection





