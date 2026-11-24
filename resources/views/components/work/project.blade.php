<article class="work-card" style="--work-accent: {{ $color }}">
    <div class="work-card-logo">
        <x-lazy-image src="{{ $img }}" alt="{{ $company_name }} logo" />
    </div>

    <div class="work-card-body">
        <div class="work-card-heading">
            <div>
                <div class="work-card-meta">
                    <span>{{ $from }} — {{ $to }}</span>
                    @if ($current_job)
                        <span class="current-job-badge">Current role</span>
                    @endif
                </div>
                <h2>{{ $company_name }}</h2>
                <p class="company-role">{{ $role }}</p>
            </div>
            @if ($link)
                <a href="{{ $link }}" target="_blank" rel="noreferrer" class="work-link" aria-label="Visit {{ $company_name }} website">Visit site <span aria-hidden="true">↗</span></a>
            @endif
        </div>

        <div class="work-details">{{ $slot }}</div>

        <div class="l-container" aria-label="Technology stack">
            @foreach ($technoligies as $technoligy)
                <div class="img-container">
                    <x-lazy-image src="{{ $technoligy }}" alt="Technology logo" />
                </div>
            @endforeach
        </div>
    </div>
</article>
