@extends('layouts/main')
@section('content')
<h1>Contact</h1>
@endsection
@section('formulaire')
<form action="{{ url('/contact') }}" method="POST" class= "container"  >
    {{ csrf_field() }}
    <div class="form-group center-block"  >
        <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom"
            value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email"
            value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
        <div class="invalid-feedback">:message</div>') !!}
    </div>
    <button type="submit" class="btn btn-secondary" name="btnEnvoyer">Envoyer !</button>
</form>
@endsection


@isset($name)
@section('Msg_enregistre')
<h3>{{$name . ' votre message a ete  ajoute Merci!!'}}</h3>
@endsection
@endisset


@isset($listes)
@section('Liste_contact')
@foreach($listes as $contact)
<h1>{{'name : ' . $contact->contact_name . ", email : " . $contact->contact_email . ', Date : ' . $contact->post_date }}<h1>
<p>{{ "message : " . $contact->contact_message }}<p>
<br>
@endforeach
@endsection
@endisset
