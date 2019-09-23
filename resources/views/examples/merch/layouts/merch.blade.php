@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron row">
            <div class="col-sm-12 text-center">
                <h1 class="display-3">
                    @yield('title')
                </h1>
            </div>
        </div>
    </div>
    @yield('merch_content')
@endsection