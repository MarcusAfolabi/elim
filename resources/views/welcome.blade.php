@extends('layouts.app')
@section('title', 'RCCG-ELIMSANCTUARY &#8211; Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
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
                <p>We are a church that is open to all ages and social classes and we believe in spreading God's love, grace, mercy, goodness and salvation to mankind through our Lord Jesus Christ.</p>
                <a href="#" class="btn btn-outline btn-rounded">Read More</a>
            </div>
        </div>
    </div>
</section>

@livewire('media.resources')
@livewire('media.gallery')
@livewire('about')
@livewire('location')
@livewire('streaming')
@endsection
