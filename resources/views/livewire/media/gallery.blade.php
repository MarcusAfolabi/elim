<div>

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
