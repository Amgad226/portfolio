<div class="work-container" style="background-color: {{ $color }}">
    <section>

        <div class="work">

            @if ($right == 1)
                <div class="work-image">
                    <x-lazy-image src="{{ $img }}" alt="{{ $company_name }} work"/>
                    <p class="worked-dates">Worked: {{ $from }} - {{ $to }}</p>
                    <p class="company-role">{{ $role ?? 'role' }} at {{ $company_name ?? 'company' }}</p>

                    @if($link)
                    <a style="background-color:{{ $color }}" href="{{ $link }}" target="_blank"
                        class="work-link">
                        Link <span>&#8599;</span>
                    </a>

                    @endif

                </div>
            @endif

            <div class="work-details {{ $right == 0 ? 'work-right' : 'work-left' }}"
                style="background-color: {{ $color }}">
                @if ($current_job)
                    <div class="current-job-badge">Current Job</div>
                @endif
                <h1>{{ $company_name }}</h1>
                <p>{{ $slot }}</p>
            </div>

            @if ($right != 1)
                <div class="work-image">
                    <x-lazy-image src="{{ $img }}" alt="{{ $company_name }} work"/>
                    <p class="worked-dates">Worked: {{ $from }} - {{ $to }}</p>
                    <p class="company-role">{{ $role ?? 'role' }} at {{ $company_name ?? 'company' }}</p>
                    @if($link)
                    <a style="background-color:{{ $color }}" href="{{ $link }}" target="_blank"
                        class="work-link">
                        Link <span>&#8599;</span>
                    </a>

                    @endif
                </div>
            @endif
            <div class= "l-container {{ $right == 1 ? 'l-container-right ' : 'l-container-left' }}">

                @foreach ($technoligies as $technoligy)
                    <div class="img-container" style="  background-color: {{ $color }}">
                        <x-lazy-image class="{{ $right == 0 ? 'img-right' : '' }}" src="{{ $technoligy }}" alt="NestJS"/>
                    </div>
                @endforeach
    
    
            </div>
        </div>
     

        <br>
    </section>
</div>
