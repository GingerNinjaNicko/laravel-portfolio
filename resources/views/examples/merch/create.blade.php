@extends('examples.merch.layouts.merch')

@section('title')
    Create Merch
@endsection

@section('merch_content')
    <div class="container">
        @component('examples.merch.components.merch_form', [
            'action' => route('examples.merch.store'),
            'method' => 'POST'
        ])
        @endcomponent
    </div>
@endsection