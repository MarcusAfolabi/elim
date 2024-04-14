@extends('layouts.app')
@section('title', 'Testimony')
@section('content')
    <div>
        <section class="background-grey">
            <div class="container">
                <div class="text-center">
                    <h2>Testimony Form</h2>
                    <p class="lead">
                        Share your story of faith and inspiration with us through our Testimony Form. Whether you've
                        experienced a life-changing moment, overcome challenges, or witnessed miracles, your testimony can
                        uplift and encourage others on their spiritual journey. Our form provides a platform for you to
                        express gratitude, celebrate victories, and spread hope. Your testimony has the power to inspire and
                        strengthen the faith of those around you.
                    </p>
                </div>
            </div>
        </section>
        <section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
                        <div class="line"></div>
                        <div class="card">
                            <div class="card-body">
                                @livewire('testimony-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
