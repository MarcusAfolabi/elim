<div>
    <section class="p-b-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section mt-5">
                    <h1>Our Gallery</h1>
                    <p>Meet with true worshipper and friends of the Kingdom</p>
                    <a class="btn" href="#"><i class="fa fa-tint"></i> Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="grid-layout grid-4-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            @foreach ($galleries as $gallery)
            <div class="grid-item">
                <a class="image-hover-zoom" href="{{ $gallery['img'] }}" data-lightbox="gallery-image"><img
                        src="{{ $gallery['img'] }}"></a>
            </div>
            @endforeach
        </div>
    </div>
</section>

</div>
