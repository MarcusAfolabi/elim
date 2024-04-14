<div>

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

    <form wire:submit.prevent="submitForm" class="form-validate">
        <h3>Choir Membership Form</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                    @error('name')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
                    @error('email')
                        <span class="text-red">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <input type="text" wire:model="phone" class="form-control" placeholder="Your Phone Number">
                    @error('phone')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" wire:model="address" class="form-control" placeholder="Your Address">
                    @error('address')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select wire:model="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    @error('gender')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select wire:model="part" class="form-control">
                        <option value="">Select part of voice you sing</option>
                        <option value="Alto">Alto</option>
                        <option value="Tenor">Tenor</option>
                        <option value="Soprano">Soprano</option>
                        <option value="Mezzo-soprano">Mezzo-soprano</option>
                        <option value="Counter-tenors">Counter-tenors</option>
                        <option value="Other">Other</option>

                    </select>
                    @error('part')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select wire:model="backup" class="form-control">
                        <option value="">Can you back up?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    @error('backup')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select wire:model="score_song" class="form-control">
                        <option value="">Can you score a song?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    @error('score_song')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="text" wire:model="genre" class="form-control"
                        placeholder="What your favourite genre of music">
                    @error('genre')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6" x-data="{ message: '', maxCharacters: 1000 }">
                <div class="form-group">
                    <textarea x-model="message" wire:model='message' x-on:input="message = $event.target.value.slice(0, maxCharacters)"
                        class="form-control" placeholder="Tell us why we should admit you" style="width: 100%; min-height: 160px;"></textarea>
                    <p x-text="`${message.length}/${maxCharacters}`"></p>
                    @error('message')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" wire:click.prevent="submitForm" wire:loading.attr="disabled"
                        class="btn">
                        <span wire:loading.remove>Submit</span>
                        <span wire:loading>Sending...</span>
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
