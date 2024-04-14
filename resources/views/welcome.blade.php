@extends('layouts.app')
@section('title',
    'RCCG-ELIMSANCTUARY &#8211; Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37')
@section('content')

    <x-video />

    <section id="page-content">
        <div class="container">
            <div class="content col-lg-9">
                <div class="heading-text heading-gradient">
                    <h5 class="text-uppercase">Elim Sanctuary
                    </h5>
                    <h2><span>WELCOME TO ELIM SANCTURARY</span></h2>
                    <p>We are a church that is open to all ages and social classes and we believe in spreading God's love,
                        grace, mercy, goodness and salvation to mankind through our Lord Jesus Christ.</p>
                    <a href="#" class="btn btn-outline btn-rounded">Read More</a>
                </div>
            </div>
        </div>
    </section>

    @livewire('media.resources')
    <section class="p-b-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="heading-text heading-section mt-5">
                        <h1>Our Gallery</h1>
                        <p>Meet with true worshipper and friends of the Kingdom</p>
                        <a class="btn" href="{{ url('gallery') }}"><i class="fa fa-tint"></i> Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('media.gallery')
    @livewire('about')
    @livewire('location')
    @livewire('streaming')
    @livewire('subscriber')
@endsection
