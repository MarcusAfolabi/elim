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
        <h3>Salvation Form</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                    @error('name')
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
                    <input type="text" wire:model="phone" class="form-control" placeholder="Your Phone Number">
                    @error('phone')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" wire:model="prayer" class="form-control" placeholder="Your Prayer Request">
                    @error('prayer')
                        <span class="text-red">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" wire:click.prevent="submitForm" wire:loading.attr="disabled" class="btn">
                        <span wire:loading.remove>Submit</span>
                        <span wire:loading>Loading...</span>
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
