@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Profile Utente</title>
</head>

<body>
    @section('content')
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="background: white;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Dettagli del profilo utente</h4>
                        <p class="card-text">
                        <p>Nome: {{ $user->name }}</p>
                        <p>Surname: {{ $user->surname }}</p>
                        <p>Profession: {{ $user->profession }}</p>
                        <p>Study Title: {{ $user->study_title }}</p>
                        <p>Country: {{ $user->country }}</p>
                        <p>City: {{ $user->city }}</p>
                        <p>Address: {{ $user->address }}</p>
                        <p>Postal Code: {{ $user->postal_code }}</p>
                        <p>Bio: {{ $user->bio }}</p>
                        
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('user.edit')}}" class="btn btn-primary">Modifica</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
