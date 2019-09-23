<section class="col-lg-6 portfolio-sect">
    <div class="card text-center">
        <a href="{{ $links[0]['url'] }}" title="View it on {{ $links[0]['source'] }}">
            <img src="{{ asset("images/screenshots/{$screenshotName}") }}" alt="Screenshot of the '{{ $title }}' project" class="card-img-top">
        </a>
        <div class="card-body">
            <h4 class="card-title">
                {{ $title }}
            </h4>
            <h6 class="card-subtitle text-muted">
                {{ $subtitle }}
            </h6>
            <hr class="divider">
            <p class="card-text">
                {{ $slot }}
            </p>
            @foreach ($links as $link)
                <a href="{{ $link['url'] }}" title="View it on {{ $link['source'] }}">
                    <button class="btn btn-success" tabindex="-1">
                        <i class="fa fa-{{ $link['source'] }}" aria-hidden="true"></i>
                        {{ $link['verb'] }}
                    </button>
                </a>
            @endforeach
        </div>
    </div>
</section>