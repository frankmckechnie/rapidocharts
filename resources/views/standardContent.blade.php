@extends('layouts.app')

@section('content')

    <callout class='callout--container'></callout>


    <div class="standard-content">
        <div class="standard-content-container">

            <div class="standard-content__wrapper">

            <h1>{{  $content->title }}</h1>

            {!! $content->body !!}

            </div>
        </div>
    </div>

@endsection
