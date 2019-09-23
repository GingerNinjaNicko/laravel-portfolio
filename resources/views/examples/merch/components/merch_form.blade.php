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
                @if('readonly' === $method) readonly @endif>
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
                @if('readonly' === $method) readonly @endif>
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
                @if('readonly' === $method) readonly @endif>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">
            Save Item
        </button>
    </div>
</form>