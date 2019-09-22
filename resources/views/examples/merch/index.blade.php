@extends('layouts.app')

@section('title')
    Merch
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron row">
            <div class="col-sm-12 text-center">
                <h1 class="display-3">
                    Our Merch
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Name</td>
                        <th>Cost</td>
                        <th>Stock</td>
                        <th>Edit</th>
                    </tr>
                    @foreach ($merch_items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <a href="#">
                                    Edit Merch
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            {{ $merch_items->links() }}
        </div>
    </div>
@endsection