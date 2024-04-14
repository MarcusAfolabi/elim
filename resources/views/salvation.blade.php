@extends('layouts.app')
@section('title', 'Salvation')
@section('content')
    <div>
        <section class="background-grey">
            <div class="container">
                <div class="text-center">
                    <h2>Salvation Form</h2>
                    <p class="lead">
                        Are you ready to take the first step towards meaningful conversation and guidance? Our Salvation
                        Form offers you the opportunity to book an appointment with our pastor. Whether you're seeking
                        advice, spiritual support, or simply want to share your concerns, our appointment form provides a
                        convenient and confidential way to connect with us. Let us assist you on your journey to growth and
                        understanding.
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
                                @livewire('salavation-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
