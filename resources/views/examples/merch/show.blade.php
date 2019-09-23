@extends('examples.merch.layouts.merch')

@section('title')
    Show Merch
@endsection

@section('merch_content')
    <div class="container">
        @component('examples.merch.components.merch_form', [
            'method' => 'GET',
            'merch' => $merch,
        ])
        @endcomponent
    </div>
@endsection