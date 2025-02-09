<div class="personal-project">
    <div class="personal-project-card">
        <div class="project-logo" style="background: {{ $logo_background }}">
            <img style="background: {{ isset($logo_inner_background) ? $logo_inner_background : '' }}"
                src="{{ $logo }}" alt="Project Logo">
        </div>
        <div class="project-header">
            <div class="project-name-section">
                <h2 class="project-name">{{ $project_title }}</h2>

                @if ($demo ?? false)
                <div  class="project-link">
                    
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
                            <div style="background:{{ $logo_background }}" class="image-container"
                                onclick="zoom(this.querySelector('img'))">
                                <img src="{{ $image }}">
                                <div class="hover-icon">
                                    <!-- SVG Zoom Icon -->
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="7" stroke="white" stroke-width="2" />
                                        <line x1="15" y1="15" x2="21" y2="21" stroke="white"
                                            stroke-width="2" />
                                        <line x1="7" y1="10" x2="13" y2="10" stroke="white"
                                            stroke-width="2" />
                                        <line x1="10" y1="7" x2="10" y2="13" stroke="white"
                                            stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
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
