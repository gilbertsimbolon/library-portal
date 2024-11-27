@extends('layouts.admin')

@include('profile.partials.navbar')
@include('profile.partials.sidebar')

<div class="container mt-2">
    @section('main-content')
    
    <div class="content-wrapper">
        <!-- Sapaan -->
        <div class="ml-2 mt-10 mb-10">
            <h2 class="d-block">Selamat Datang, {{ Auth::user()->name ?? 'Guest' }} !!!</h2>
        </div>

        <section class="content">
            @include('layouts.small-box')
        </section>
    </div>
    
    @endsection
</div>