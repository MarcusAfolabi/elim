<div>

    <section id="section3" class="p-b-120">
        <div class="container">
            <div class="col-lg-12 m-b-100  center">
                <div class="heading-text heading-section text-center">
                    <h2>OUR RESOURCES</h2>
                    <p>Dedicated to shaping you in accordance with HIS preferences, our resources are committed to
                        building
                        and refining your capabilities</p>
                </div>
                <div class="container">
                    <div class="heading-text text-dark text-center">
                        <div class="carousel team-members team-members-shadow" data-items="3">
                            @foreach ($medias as $media)
                                <div class="team-member">
                                    <a href="{{ $media['href'] }}">
                                        <div class="team-image">
                                            <img src="{{ $media['img'] }}">
                                        </div>
                                    </a>
                                    <div class="team-desc">
                                        <h3>{{ $media['title'] }}</h3>
                                        <div class="align-center">
                                            <a class="btn btn-xs btn-slide btn-light" href="{{ $media['href'] }}">
                                                <i class="{{ $media['class'] }}"></i>
                                                <span>Download</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
