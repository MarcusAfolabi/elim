<div>
    <section id="section" class="background-ash">
        <div class="container">
            <div class="heading-text heading-section text-center m-b-40">
                <h2 class="m-b-0">See who we are</h2>
                <span class="lead">This is what we stand for</span>
            </div>
            <div id="blog">

                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    @foreach ($abouts as $abt)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-slider">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-items="1"
                                    data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                    <a href="{{ $abt['img'] }}" data-lightbox="gallery-image">
                                        <img alt="Elim Sanctuary" src="{{ $abt['img'] }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2><a href="#">{{ $abt['title'] }}</a></h2>
                                    <p>{{ $abt['content'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
