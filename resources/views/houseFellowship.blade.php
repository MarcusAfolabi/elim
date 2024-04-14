@extends('layouts.app')
@section('title', 'House Fellowship')
@section('content')
    <div id="slider" class="inspiro-slider" data-height-xs="160">
        <div class="slide" style="background-image:url('images/hero/hero-house-fellowship.png');">
        </div>
    </div>
    <section class="background-grey text-center p-t-60  p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="font-weight: 100;"><em>A major part of the Elim sanctuary church of the Redeemed Christian
                            Church of God and Mentoring process is the House Fellowship system. We have centres located
                            around Lagos. Access to house fellowship groups is through congregations, and particularly the
                            newcomers events. To assist you in finding one of our house fellowship centres nearest to you,
                            kindly liaise with one of our pastors or check our list as available.</em></h3>
                </div>
            </div>
        </div>
    </section>
    <section class="background-grey">
        <div class="container-fluid">
                @livewire('house-fellowship')
        </div>
    </section>
    <section class="background-grey text-center p-t-60  p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="font-weight: 100;"><em>Do you want to join our house fellowship, please send us a mail at <a
                                href="mailto:info@rccg-elimsanctuary.org">info@rccg-elimsanctuary.org</a></em></h3>
                </div>
            </div>
        </div>
    </section>

@endsection
