<form class="row" wire:submit.prevent="submit">
    @csrf
    <div class="form-group col-md-6">
        <input type="text" id="input_fname" name="first_name" wire:model="contact.first_name" placeholder="First Name"
            class="form-control">
        @error('contact.first_name')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="text" id="input_lname" name="last_name" wire:model="contact.last_name" placeholder="Last Name"
            class="form-control">
        @error('contact.last_name')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="text" id="input_email" name="email" wire:model="contact.email" placeholder="Your Email"
            class="form-control">
        @error('contact.email')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <input type="text" id="input_phone" wire:model="contact.phone" name="phone" placeholder="Your Phone Number"
            class="form-control">
        @error('contact.phone')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <div class="form-group col-md-12">
        <input type="text" id="input_subject" name="subject" wire:model="contact.subject" placeholder="Subject"
            class="form-control">
        @error('contact.subject')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <div class="form-group col-md-12">
        <textarea id="textarea_message" name="message" wire:model="contact.message" placeholder="Your Message" rows="6"
            class="form-control"></textarea>
        @error('contact.message')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    <button id="btn_submit" type="submit" class="btn btn-success " value="Send Now">
        Create FAQ
    </button>
</form>
