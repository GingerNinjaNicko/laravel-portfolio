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

    @component('examples.merch.components.alert', [
        'check' => session('message'),
        'type' => session('status') ?? 'success',
    ])
        {{ session('message') }}
    @endcomponent
    
    @component('examples.merch.components.alert', [
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