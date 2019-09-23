<form action="{{ $action ?? null }}" method="POST">
    @csrf
    @if (in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">
            Name
        </label>
        <div class="col-sm-10">
            <input type="text"
                maxlength="255"
                class="form-control"
                name="name"
                value="{{ old('name') ?? $merch->name ?? null }}"
                placeholder="Merch item name..."
                @if('get' === $method) readonly @endif>
        </div>
    </div>

    <div class="form-group row">
        <label for="cost" class="col-sm-2 col-form-label">
            Cost
        </label>
        <div class="col-sm-10">
            <input type="number"
                min="0" max="65535"
                class="form-control"
                name="cost"
                value="{{ old('cost') ?? $merch->cost ?? null }}"
                placeholder="Cost of item"
                @if('get' === $method) readonly @endif>
        </div>
    </div>

    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">
            Stock
        </label>
        <div class="col-sm-10">
            <input type="number"
                min="0" max="65535"
                class="form-control"
                name="stock"
                value="{{ old('stock') ?? $merch->stock ?? null }}"
                placeholder="Stock level"
                @if('get' === $method) readonly @endif>
        </div>
    </div>

    @if (isset($action))
        <div class="form-group">
            <button type="submit" class="btn btn-success">
                Save Item
            </button>
        </div>
    @else
        <div class="form-group">
            <a href="{{ route('examples.merch.edit', ['merch' => $merch->id]) }}">
                <button type="button" class="btn btn-warning">
                    Edit Item
                </button>
            </a>
        </div>
    @endif
</form>