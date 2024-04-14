<div>
    @if ($testimonies)
        <div class="carousel testimonial testimonial-border" data-items="2" data-equalize-item=".testimonial-item">
            @foreach ($testimonies as $testy)
                <div class="testimonial-item">
                    <img src="{{ asset('images/elim-redeemed-logo.png') }}" alt="">
                    <p>{{ $testy->message }}</p>
                    <span>{{ $testy->name }}</span>
                </div>
            @endforeach
        </div>
        @else
        <p>Testimony coming up</p>
    @endif

</div>
