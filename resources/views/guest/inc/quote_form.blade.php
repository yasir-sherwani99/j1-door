
<div class="bg-white form-outer-get {{ $new_class }}">
    @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <button type="button" class="btn-close font-14" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul class="mb-0 font-14">
                @foreach($errors->all() as $error)
                    <li style="text-align: left !important;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success fade show font-14 mb-4" style="text-align: left !important;" role="alert">
            <strong>Welldone! </strong>
            {{ session()->get('success') }}
        </div>
    @endif
    <form method="POST" class="needs-validation" action="{{ route('guest.quote.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row g-2">
            <div class="col-lg-6">
                <div class="mb-2">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name*" required />
                    <div class="invalid-feedback" style="text-align: left !important;">
                        <small>First name is a required field.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-2">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name*" required />
                    <div class="invalid-feedback" style="text-align: left !important;">
                        <small>Last name is a required field.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-2">
            <input type="email" name="email" class="form-control" placeholder="Email Address*" required />
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Email is a required field.</small>
            </div>
        </div>
        <div class="mb-2">
            <input type="text" name="phone" class="form-control" placeholder="Mobile Phone*" required />
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Phone is a required field.</small>
            </div>
        </div>
        <div class="mb-2">
            <input type="text" name="zip" class="form-control" placeholder="Zip*" required />
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Zip code is a required field.</small>
            </div>
        </div>
        <div class="mb-2">
            <select class="form-select" name="product_type" aria-label="Product Type Interest" required>
                <option value="">Product Type Interest*</option>
                <option value="Residential Service Repair">Residential Service Repair</option>
                <option value="Residential Garage Doors">Residential Garage Doors</option>
                <option value="Residential Garage Door Openers">Residential Garage Door Openers</option>
                <option value="Commercial Doors">Commercial Doors</option>
                <option value="Commercial High Performance Doors">Commercial High Performance Doors</option>
                <option value="Commercial Operators">Commercial Operators</option>
                <option value="Commercial Service/Repair">Commercial Service/Repair</option>
                <option value="Dock Equipment">Dock Equipment</option>
                <option value="Dock Equipment Service/Repair">Dock Equipment Service/Repair</option>
            </select>
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Product type is a required field.</small>
            </div>
        </div>
        <div class="mb-2">
            <select class="form-select" name="service_type" aria-label="Service or Repair" required>
                <option value="">What service or repair is required?</option>
                <option value="Door Opens Slowly or is Sluggish">Door Opens Slowly or is Sluggish</option>
                <option value="Broken Spring">Broken Spring</option>
                <option value="Door / Motor is Noisy">Door / Motor is Noisy</option>
                <option value="Roller Replacement">Roller Replacement</option>
                <option value="Remotes / Keypad / Wall Button Not">Remotes / Keypad / Wall Button Not</option>
                <option value="Opener Issues">Opener Issues</option>
                <option value="Door Won&#x27;t Open with Motor">Door Won&#x27;t Open with Motor</option>
                <option value="Door Won&#x27;t Close with Motor">Door Won&#x27;t Close with Motor</option>
                <option value="Door is Off-Track / Track Alignment">Door is Off-Track / Track Alignment</option>
                <option value="New Garage Door Motor Install">New Garage Door Motor Install</option>
                <option value="Weather Seal or Trim issue">Weather Seal or Trim issue</option>
                <option value="Sensor Alignment">Sensor Alignment</option>
                <option value="Cable Replacement">Cable Replacement</option>
                <option value="Garage Door Preventative Maintenance">Garage Door Preventative Maintenance</option>
                <option value="Garage Door Tune-up">Garage Door Tune-up</option>
                <option value="Additional Opener Remotes">Additional Opener Remotes</option>
                <option value="Issue Not Listed">Issue Not Listed</option>
            </select>
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Service or repair type is a required field.</small>
            </div>
        </div>
        <div class="mb-2">
            <textarea
                name="description"
                class="form-control"
                placeholder="Tell us more about your project needs.*" 
                required
                style="height: 100px;"
            ></textarea>
            <div class="invalid-feedback" style="text-align: left !important;">
                <small>Project description is a required field.</small>
            </div>
        </div>
        <div class="mb-2 d-flex justify-content-center">
            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
        </div>
        <button type="submit" class="btn btn-solid w-100 big-btn">SUBMIT</button>
    </form>
</div>
        