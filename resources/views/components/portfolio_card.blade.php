<section class="col-lg-6 portfolio-sect">
    <div class="card text-center">
        <a href="{{ $link }}" title="View code on Codepen">
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
            <a href="{{ $link }}" title="View code on Codepen">
                <button class="btn btn-success" tabindex="-1">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    View App
                </button>
            </a>
        </div>
    </div>
</section>