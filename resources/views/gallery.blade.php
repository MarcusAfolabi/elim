@extends('layouts.app')
@section('title', 'Gallery')
@section('content')
        <section class="background-grey">
            <div class="container">
                <div class="text-center">
                    <h2>Gallery </h2>
                    <p class="lead">
                        Explore the beauty and diversity of our community through Our Gallery. Featuring a collection of
                        captivating images and moments captured during our events, services, and gatherings, Our Gallery
                        offers a glimpse into the vibrant spirit and rich experiences shared within our community. From
                        joyful celebrations to moments of reflection, each image tells a story and embodies the essence of
                        our shared journey. Join us as we celebrate the moments that unite us and showcase the beauty of our
                        community.
                    </p>
                </div>
            </div>
        </section>
        @livewire('media.gallery')
@endsection
