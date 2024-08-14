@extends('layout.headerfooter')

<head>
    <style>
        .title{
            font-size: 26px;
            font-weight: bold;
            margin-bottom:30px;
            margin-top:20px;
        }
    </style>
</head>

@section('content')

<x-guest-layout>
    <br/><br/>
    <x-authentication-card>
        
<x-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    <div style="text-align:center;">
        <h2 class="title">Sign In<h2>
    </div>
    @csrf

    <div>
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Create New Account') }}
            </a>
        @endif

        <x-button class="ms-4">
            {{ __('Log in') }}
        </x-button>
    </div>
</form>
</x-authentication-card>
</x-guest-layout>
@endsection