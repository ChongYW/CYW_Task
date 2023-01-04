@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile info') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>Hello</h3>

                    <div>
                        <h4>ID</h4>
                        {{ $user -> id }}
                    </div>

                    <hr>

                    <div>
                        <h4>Name</h4>
                        {{ $user -> name }}
                    </div>

                    <hr>

                    <div>
                        <h4>Email</h4>
                        {{ $user -> email }}
                    </div>

                    <hr>

                    <div>
                        <h4>IC</h4>
                        {{ $user -> u_icNo }}
                    </div>

                    <hr>

                    <div>
                        <h4>Country</h4>
                        {{ $user -> u_country }}
                    </div>

                    <hr>

                    <div>
                        <h4>Birthday</h4>
                        {{ $user -> u_birthday }}
                    </div>

                    <hr>

                    <div>
                        <a class="btn btn-primary" href="{{ route('editProfile') }}">Edit</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
