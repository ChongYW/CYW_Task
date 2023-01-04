@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('update') }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user -> name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user -> email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <a class="btn btn-primary col-md-4" href="#">Change password</a>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="u_icNo" class="col-md-4 col-form-label text-md-end">{{ __('IC NO.') }}</label>

                            <div class="col-md-6">
                                <input id="u_icNo" type="text" class="form-control" name="u_icNo" value="{{ $user -> u_icNo }}">
                            </div>
                        </div>

<!--                        <div class="row mb-3">-->
<!--                            <label for="u_country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="u_country" type="text" class="form-control" name="u_country" value="{{ $user -> u_country }}">-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="row mb-3">
                            <label for="u_country" class="col-md-4 col-form-label text-md-end">Country</label>

                            <select id="u_country" class="col-md-6" name="u_country" value="{{ $user -> u_country }}">
                                <option value="" >Please select your current country</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="US">US</option>
                                <option value="China">China</option>
                                <option value="UK">UK</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <label for="u_birthday" class="col-md-4 col-form-label text-md-end">{{ __('Birthday') }}</label>

                            <div class="col-md-6">
                                <input id="u_birthday" type="date" class="form-control" name="u_birthday" value="{{ $user -> u_birthday }}">
                            </div>
                        </div>

                        <div class="row mb-0 p-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
