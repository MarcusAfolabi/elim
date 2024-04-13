<div>
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>MEET OUR PASTORS</h2>
                <p>Discover the heart behind our community as you explore profiles of our dedicated pastors. Learn about
                    their backgrounds, passions, and vision for guiding and nurturing our congregation. Dive into
                    personal stories and insights that inspire and enrich our spiritual journey together.
                </p>
            </div>
            <div class="row team-members">
            @foreach ($pastors as $pastor)

                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ $pastor['img'] }}">
                        </div>
                        <div class="team-desc">
                            <h3>{{ $pastor['name'] }}</h3>
                            <p>Contact {{ $pastor['title'] }}</p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="https://www.facebook.com/rccgesl/video">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="https://twitter.com/RccgESL" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="https://www.instagram.com/rccgelimsanctuary" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="https://www.youtube.com/channel/UCs7I0BXvWu79rrH8jJZza0Q"
                                    data-width="80">
                                    <i class="fab fa-youtube"></i>
                                    <span>Youtube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</div>
