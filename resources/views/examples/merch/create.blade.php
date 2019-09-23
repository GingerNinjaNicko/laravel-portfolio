@extends('layouts.app')

@section('title')
    Create Merch
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron row">
            <div class="col-sm-12 text-center">
                <h1 class="display-3">
                    Create Merch
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('merch.store') }}" method="post">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">
                    Name
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Merch item name...">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost" class="col-sm-2 col-form-label">
                    Cost
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="cost" value="{{ old('cost') }}" placeholder="Cost of item">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">
                    Stock
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="Stock level">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Save Item
                </button>
            </div>
        </form>
    </div>
@endsection