@if ($check)
    <div class="container">
        <div class="text-center alert alert-{{ $type }}" role="alert">
            {{ $slot }}
        </div>
    </div>
@endif