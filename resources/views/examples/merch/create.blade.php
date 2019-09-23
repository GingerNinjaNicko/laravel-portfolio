@extends('examples.merch.layouts.merch')

@section('title')
    Create Merch
@endsection

@section('merch_content')
    <div class="container">
        <form action="{{ route('merch.store') }}" method="post">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">
                    Name
                </label>
                <div class="col-sm-10">
                    <input type="text" maxlength="255" class="form-control" name="name" value="{{ old('name') }}" placeholder="Merch item name...">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost" class="col-sm-2 col-form-label">
                    Cost
                </label>
                <div class="col-sm-10">
                    <input type="number" min="0" max="65535" class="form-control" name="cost" value="{{ old('cost') }}" placeholder="Cost of item">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">
                    Stock
                </label>
                <div class="col-sm-10">
                    <input type="number" min="0" max="65535" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="Stock level">
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