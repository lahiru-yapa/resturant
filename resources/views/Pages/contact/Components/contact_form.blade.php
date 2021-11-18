<form wire:submit.prevent="submit" id="contact">
    @csrf
    <div class="col-md-6">
        <input type="text" name="first_name" placeholder="First Name" wire:model="contact.first_name">
        @error('contact.first_name')
        <label class="error">{{ $message }}</label>
        @enderror
    </div>
    {{-- <div class="form-group col-md-6">
        <input type="text" id="input_lname" name="last_name" required="" placeholder="Last Name"
            class="form-control">
    </div>
    <div class="form-group col-md-6">
        <input type="text" id="input_email" name="email" required="" placeholder="Your Email"
            class="form-control">
    </div>
    <div class="form-group col-md-6">
        <input type="text" id="input_phone" required="" name="phone" placeholder="Your Phone Number"
            class="form-control">
    </div>
    <div class="form-group col-md-12">
        <input type="text" id="input_subject" name="subject" required="" placeholder="Subject"
            class="form-control">
    </div>
    <div class="form-group col-md-12">
        <textarea id="textarea_message" name="message" placeholder="Your Message" rows="6"
            class="form-control"></textarea>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
