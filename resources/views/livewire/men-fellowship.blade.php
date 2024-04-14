<div>
    {{-- @if ($showSuccessModal)
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
    @endif --}}
    <form wire:submit.prevent="submitForm" class="form-validate">
        <h3>Men's Fellowship Form</h3>
        <div id="mc_embed_signup_scroll">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Full name <span class="asterisk">*</span>
                        </label>
                        <input type="text" wire:model="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                        </label>
                        <input type="text" wire:model="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mce-ADDRESS-addr1">Address <span class="asterisk">*</span>
                        </label>
                        <input type="text" wire:model="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="mce-ADDRESS-city">City</label>
                        <input type="text" wire:model="city" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="mce-ADDRESS-state">State</label>
                        <input type="text" wire:model="state" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mce-PHONE">Phone Number <span class="asterisk">*</span>
                        </label>
                        <input type="tel" maxlength='11' wire:model="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mce-MMERGE2">Age brackets <span class="asterisk">*</span></label>
                        <select wire:model="ageBracket" id="ageBracket">
                            <option value="">Select Age Bracket</option>
                            @foreach ($agebrackets as $bracket)
                                <option value="{{ $bracket }}">{{ $bracket }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mce-MMERGE5">Hobbies <span class="asterisk">*</span>
                        </label>
                        <input type="text" wire:model="hobbies" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mce-MMERGE6">Occupation <span class="asterisk">*</span>
                        </label>
                        <input type="text" wire:model="occupation" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" wire:click.prevent="submitForm" wire:loading.attr="disabled"
                                class="btn">
                                <span wire:loading.remove>Join</span>
                                <span wire:loading>Sending...</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
    </form>
</div>
