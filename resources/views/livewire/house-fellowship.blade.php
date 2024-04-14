 <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="4"
                data-items-sm="2" data-items-xxs="1" data-equalize-item=".testimonial-item">
                    @foreach ($houses as $house)
        <div class="testimonial-item">
            <img src="images/elim-redeemed-logo.png" alt="{{ $house['name'] }}">
            <p>{{ $house['name'] }}</p>
            <span>Address: {{ $house['address'] }}</span>
            <span>Host: {{ $house['host'] }}</span>
        </div>
    @endforeach
        </div>
