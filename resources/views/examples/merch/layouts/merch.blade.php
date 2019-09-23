@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron row">
            <div class="col-sm-12 text-center">
                <h1 class="display-3">
                    @yield('title')
                </h1>
                <a href="{{ route('examples.merch.index') }}">
                    <button class="btn btn-secondary">go to Merch index</button>
                </a>
            </div>
        </div>
    </div>

    @component('components.alert', [
        'check' => session('message'),
        'type' => session('status') ?? 'success',
    ])
        {{ session('message') }}
    @endcomponent
    
    @component('components.alert', [
        'check' => $errors->any(),
        'type' => 'danger',
    ])
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endcomponent

    @yield('merch_content')
@endsection