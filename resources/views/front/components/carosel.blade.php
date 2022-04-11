@if ($sliders->count())
    <div id="carouselExampleDark" class="carousel carousel-dark slide container-fluid carousel-fade mt-2"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $slider)
                <button type="button" data-bs-target="#carouselExampleDark" aria-label="Slide {{ $loop->index + 1 }}"
                    data-bs-slide-to="{{ $loop->index }}"
                    @if ($loop->first) class="active" aria-current="true" @endif></button>
            @endforeach
        </div>
        <div class="carousel-inner">

            @foreach ($sliders as $slider)
                <div class="carousel-item @if ($loop->first) active @endif " data-bs-interval="10000">
                    <img src="{{ asset('uploads/sliders') . '/' . $slider->image }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endif
