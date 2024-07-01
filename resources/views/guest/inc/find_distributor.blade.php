<section class="find-sec">
    <div class="container-fluid">
        <div class="find-inner text-center m-auto w-100 text-white">
            <h4 class="font-weight-sbold text-capitalize">Find a Distributor</h4>
            <p class="font-24 font-weight-nomral">
                Talk to our experts or browse through<br />
                more doors.
            </p>
            <div class="bg-white form-outer-get">
                <form method="POST" class="needs-validation" action="#" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="mb-2">
                        <select class="form-select" name="region" aria-label="Select Region" required>
                            <option value="">Select Region</option>
                            <option value="usa">United States</option>
                            <option value="canada">Canada</option>
                        </select>
                        <div class="invalid-feedback" style="text-align: left !important;">
                            <small>Region is a required field.</small>
                        </div>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="location" placeholder="Enter Address,City or Zip" required />
                        <div class="invalid-feedback" style="text-align: left !important;">
                            <small>Location is a required field.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-solid w-100 big-btn">
                        <img class="me-2" src="images/search.svg" alt="" /> Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>