<div>
    <section class="background-grey">
        <div class="container">
            <div class="text-center">
                <h2>Schedule an Appointment to Meet Our Pastor</h2>
                <p class="lead">
                    Take the first step towards meaningful conversation and guidance by booking an appointment with our
                    pastor. Our appointment form provides a convenient way to request a meeting, allowing you to share
                    your concerns, seek advice, or receive spiritual support. Let us help you on your journey to growth
                    and understanding
                </p>
                <a class="btn icon-left" href="#"><span>Apply now!</span></a>
            </div>
        </div>
    </section>

    @if ($showSuccessModal)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Successful!</h5>
                        <button type="button" class="close" wire:click="$set('showSuccessModal', false)"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $successMessage }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"
                            wire:click="$set('showSuccessModal', false)">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="line"></div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <form wire:submit.prevent="submitForm" class="form-validate">
                                    <h3>Appointment Form</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" wire:model="name" class="form-control"
                                                    placeholder="Your Name">
                                                @error('name')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <input type="email" wire:model="email" class="form-control"
                                                    placeholder="Your Email">
                                                @error('email')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <input type="text" wire:model="phone" class="form-control"
                                                    placeholder="Your Phone Number">
                                                @error('phone')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6" x-data="{ message: '', maxCharacters: 1000 }">
                                            <div class="form-group">
                                                <textarea x-model="message" wire:model='message' x-on:input="message = $event.target.value.slice(0, maxCharacters)" class="form-control"
                                                    placeholder="Your Message" style="width: 100%; min-height: 160px;"></textarea>
                                                <p x-text="`${message.length}/${maxCharacters}`"></p>
                                                @error('message')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" wire:click.prevent="submitForm"
                                                    wire:loading.attr="disabled" class="btn">
                                                    <span wire:loading.remove>Submit</span>
                                                    <span wire:loading>Loading...</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
