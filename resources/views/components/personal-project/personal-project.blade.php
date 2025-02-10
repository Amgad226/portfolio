<div class="personal-project">
    <div class="personal-project-card">
        <div class="project-logo" style="background: {{ $logo_background }}">
            <x-lazy-image style="background: {{ isset($logo_inner_background) ? $logo_inner_background : '' }}"
                src="{{ $logo }}" alt="Project Logo" />
        </div>
        <div class="project-header">
            <div class="project-name-section">
                <h2 class="project-name">{{ $project_title }}</h2>

                @if ($demo ?? false)
                    <div class="project-link">

                        <a href="{{ $demo }}" class="project-link">link</a>
                    </div>
                @endif
            </div>
            <button style ="background:{{ $logo_background }}" class="toggle-btn">Expand</button>
        </div>
        <div class="project-content">
            <div class="project-card">
                <p class="project-description">
                    {{ $project_description }}
                </p>

                @if ($features ?? false)
                    <h4 class="section-title">Key Features:</h4>
                    <ul class="features-list">
                        @foreach ($features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($responsibilities ?? false)
                    <h4 class="section-title">My Responsibilities:</h4>
                    <ul class="responsibilities-list">
                        @foreach ($responsibilities as $responsibility)
                            <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($images ?? false)
                    <div class="project-images">
                        @foreach ($images as $image)
                            <x-utils.image-zoom src="{{ $image }}" style="background:{{ $logo_background }}" />
                        @endforeach
                    </div>

                @endif

                <br>

                @if ($tags ?? false)
                    <div class="tags">
                        @foreach ($tags as $tag => $color)
                            <span style="background:{{ $color }}" class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif


            </div>
        </div>
    </div>
</div>
