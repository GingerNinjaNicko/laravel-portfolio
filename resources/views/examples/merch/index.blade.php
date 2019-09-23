@extends('examples.merch.layouts.merch')

@section('title')
    Our Merch
@endsection

@section('merch_content')
    <div class="container">
        <div class="row">
            <a href="{{ route('merch.create') }}">
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
                    @foreach ($merch_items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <a href="{{ route('merch.show', ['item' => $item->id]) }}">
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