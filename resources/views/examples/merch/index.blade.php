@extends('examples.merch.layouts.merch')

@section('title')
    Our Merch
@endsection

@section('merch_content')
    <div class="container">
        <div class="row">
            <a href="{{ route('examples.merch.create') }}">
                <button type="button" class="btn btn-success">
                    Add New Item
                </button>
            </a>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Name</td>
                        <th>Cost</td>
                        <th>Stock</td>
                        <th>Show</th>
                    </tr>
                    @foreach ($merch_items as $merch)
                        <tr>
                            <td>{{ $merch->name }}</td>
                            <td>{{ $merch->cost }}</td>
                            <td>{{ $merch->stock }}</td>
                            <td>
                                <a href="{{ route('examples.merch.show', ['merch' => $merch]) }}">
                                    Show Merch
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