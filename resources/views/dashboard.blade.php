@extends('layouts.admin')

@include('profile.partials.navbar')
@include('profile.partials.sidebar')

<div class="container mt-2">
    @section('main-content')
    
    <div class="content-wrapper">
        <section class="content">
            @include('layouts.small-box')
        </section>
    </div>
    
    @endsection
</div>