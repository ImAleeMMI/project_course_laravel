@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/stile.css') }}">
    <title>Edit - User</title>

</head>

<body>
    @section('content')
        <div class="container">
            <div class="card" style="background: #fff; padding:20px 10px;">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="title">Edit Profile User</h1>
                <form class="row g-3" action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="">Nome</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}"
                            required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Surname</label>
                        <input class="form-control" type="text" name="surname"
                            value="{{ old('surname', $user->surname) }}" required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Profession</label>
                        <input class="form-control" type="text" name="profession"
                            value="{{ old('profession', $user->profession) }}" required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Study Title</label>
                        <input class="form-control" type="text" name="study_title"
                            value="{{ old('study_title', $user->study_title) }}" required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Country</label>
                        <input class="form-control" type="text" name="country" value="{{ old('country', $user->country) }}"
                            required>
                    </div>

                    <div class="col-md-12">
                        <label for="">City</label>
                        <input class="form-control" type="text" name="city" value="{{ old('city', $user->city) }}"
                            required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Address</label>
                        <input class="form-control" type="text" name="address" value="{{ old('address', $user->address) }}"
                            required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Postal Code</label>
                        <input class="form-control" type="text" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}"
                            required>
                    </div>

                    <div class="col-md-12">
                        <label for="">Bio</label>
                        <input class="form-control" type="text" name="bio" value="{{ old('bio', $user->bio) }}"
                            required>
                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Aggiorna Profilo</button>
                    </div>
                </form>
                <form action="{{ route('user.show') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn">Profilo</button>
                </form>
            </div>
        </div>
    @endsection

</body>

</html>
