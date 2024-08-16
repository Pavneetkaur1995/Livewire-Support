<form wire:submit.prevent="submitForm" action="/support" method="POST">
    <h3 class="form-heading">Support</h3>
    <ul class="form-style-1">
        @if($success)
            <li>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ $success }}
                </div>
            </li>
        @endif
        <li>
            <label>Name <span class="required">*</span></label>
            <input wire:model="name" type="text" name="name" class="field-long" placeholder="Name" />
            @error('name')
                <p class="error-input">{{ $message }}</p>
            @enderror
        </li>
        <li>
            <label>Email <span class="required">*</span></label>
            <input wire:model="email" type="text" name="email" class="field-long" placeholder="Email"/>
            @error('email')
                <p class="error-input">{{ $message }}</p>
            @enderror
        </li>
        <li>
            <label>Subject</label>
            <input wire:model="subject" type="text" name="subject" class="field-long" placeholder="Subject" />
            @error('subject')
                <p class="error-input">{{ $message }}</p>
            @enderror
        </li>
        <li>
            <label>Details<span class="required">*</span></label>
            <textarea wire:model="details" name="details" id="details" class="field-long field-textarea"></textarea>
            @error('details')
                <p class="error-input">{{ $message }}</p>
            @enderror
        </li>
        <li>
            <input type="submit" value="Submit" />
        </li>
    </ul>
</form>