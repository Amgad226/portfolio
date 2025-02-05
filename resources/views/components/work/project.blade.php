
<div class="work-container" style="background-color: {{ $color }}">
    <section>

        <div class="work">
            <div class= "l-container {{ $right == 1 ? 'l-container-right ' : 'l-container-left' }}">

                @foreach ($technoligies as $technoligy)
                    <div class="img-container" style="  background-color: {{ $color }}">
                        <img class="{{ $right == 0 ? 'img-right' : '' }}" src="{{ $technoligy }}" alt="NestJS">
                    </div>
                @endforeach


            </div>

            @if ($right == 1)
                <div class="work-image">
                    <img src="{{ $img }}" alt="{{ $company_name }} work">
                    <p class="worked-dates">Worked: {{ $from }} - {{ $to }}</p>
                    <p class="company-role">{{ $role ?? 'role' }} at {{ $company_name ?? 'company' }}</p>

                    <a style="background-color:{{ $color }}" href="{{ $link }}" target="_blank"
                        class="work-link">
                        View Work <span>&#8599;</span>
                    </a>


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
                    <img src="{{ $img }}" alt="{{ $company_name }} work">
                    <p class="worked-dates">Worked: {{ $from }} - {{ $to }}</p>
                    <p class="company-role">{{ $role ?? 'role' }} at {{ $company_name ?? 'company' }}</p>

                    <a style="background-color:{{ $color }}" href="{{ $link }}" target="_blank"
                        class="work-link">
                        View Work <span>&#8599;</span>
                    </a>

                </div>
            @endif
        </div>
        <br>
    </section>
</div>
