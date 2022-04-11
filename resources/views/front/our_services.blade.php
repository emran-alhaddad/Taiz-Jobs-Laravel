@extends('front.layout.master')
@section('front-content')
    @include('front.components.carosel')

    <section class="features" style="padding: 70px 0px 60px 0px;">
        <div class="container content-row">
            <div class="row">
                @if ($services->count())
                    @foreach ($services as $service)
                        <div class="col-md-4 col-sm-4 ">
                            <div class="features-content h-100">
                                <span class="box1">
                                    <img class="w-25 mb-3"
                                        src="{{ asset('uploads/services') . '/' . $service->image }}" alt="">
                                </span>
                                <h3>{{ $service->title }}</h3>
                                <p class="mt-2">{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
