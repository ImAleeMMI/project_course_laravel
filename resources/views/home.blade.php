@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <h1>Benvenuto {{ Auth::user()->name }}</h1>
                            <a href="{{ route('user.show') }}" class="btn btn-primary">Visualizza Profilo</a>
                            <a href="{{ ('/') }}" class="btn btn-info">Homepage</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
