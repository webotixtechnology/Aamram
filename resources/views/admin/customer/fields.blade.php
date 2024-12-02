<div class="form theme-form">
    <!-- General Information Section -->
     <div class="row">
         <div class="col-sm-4">
     <div class="mb-3">
                <label>Customer Name<span> *</span></label>
                <input class="form-control" type="text" name="customer_name" value="{{ isset($customer->customer_name) ? $customer->customer_name : old('customer_name') }}" placeholder="Enter Customer Name">
                @error('customer_name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
            <div class="col-sm-4">
            <div class="mb-3">
                <label>Company Name<span> *</span></label>
                <input class="form-control" type="text" name="company_name" value="{{ isset($customer->company_name) ? $customer->company_name : old('company_name') }}" placeholder="Enter Company Name">
                @error('company_name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
            <div class="col-sm-4">
            <div class="mb-3">
                <label>Mobile Number<span> *</span></label>
                <input class="form-control" type="text" name="mobile_no" value="{{ isset($customer->mobile_no) ? $customer->mobile_no : old('mobile_no') }}" placeholder="Enter Mobile Number">
                @error('mobile_no')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
     </div>
        
     <div class="row">
        <div class="col-sm-4">
        <div class="mb-3">
                <label>Email<span> *</span></label>
                <input class="form-control" type="text" name="email_id" value="{{ isset($customer->email_id) ? $customer->email_id : old('email_id') }}" placeholder="Enter Your Email">
                @error('email_id')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-sm-4">
        <div class="mb-3">
                <label>Address<span> *</span></label>
                <input class="form-control" type="text" name="address" value="{{ isset($customer->address) ? $customer->address : old('address') }}" placeholder="Enter Your Address">
                @error('address')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-sm-4">
        <div class="mb-3">
                <label>Pin Code<span> *</span></label>
                <input class="form-control" type="text" name="pin_code" value="{{ isset($customer->pin_code) ? $customer->pin_code : old('pin_code') }}" placeholder="Enter Pin Code">
                @error('pin_code')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
     </div>

    <div class="row">
        <div class="col-sm-4">
            <input type="hidden" name="country_id" id="country_id" value="101">
            <div class="mb-3">
                <label>State<span> *</span></label>
                <select class="form-select" name="state_id" id="state_id">
                    <option value="" selected disabled hidden>Select State</option>
                    @foreach ($states as $key => $states)
                        <option value="{{ $key }}"
                            @if (isset($customer->id) && old('id', $customer->state_id) == $key) @selected(true) @endif>
                            {{ $states }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mb-3">
                <label>District<span> *</span></label>
                <select class="form-select" name="district_id" id="district_id">
                    <option value="" selected disabled hidden>Select District</option>
                    @foreach ($districts as $key => $district)
                        <option value="{{ $key }}"
                            @if (isset($customer->id) && old('id', $customer->district_id) == $key) @selected(true) @endif>
                            {{ $district }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <label>City Name<span> *</span></label>
                <input class="form-control" type="text" name="city_name" value="{{ isset($customer->city_name) ? $customer->city_name : old('city_name') }}" placeholder="Enter City Name">
                @error('city_name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- <div class="col-sm-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="district_status" name="district_status" value="1" 
                    {{ isset($row->district_status) && $row->district_status ==  0? 'checked' : '' }}>
                <label>Disable This District</label>
            </div>
        </div> -->
    </div>

    <div class="row">
        <div class="col">
            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </div>
    </div>
</div>

<script>
    function updatevalue(){
        var checkbox = document.getElementById('district_status');
        if (checkbox.value == 1) {
            checkbox.value = 0; 
        } else {
            checkbox.value = 1; 
        }
    }
</script>
