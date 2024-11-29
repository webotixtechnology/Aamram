@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>District</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">District</li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>Add District</h4>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form" id="roleForm" action="{{ route('admin.district.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form theme-form">
    <!-- General Information Section -->
    <div class="row">
        <div class="col-sm-4">
            <input type="hidden" name="country_id" id="country_id" value="101">
            <div class="mb-3">
                <label>State<span> *</span></label>
                <select class="form-select" name="state_id" id="state_id">
                    <option value="" selected disabled hidden>Select State</option>
                    @foreach ($states as $key => $states)
                        <option value="{{ $key }}"
                            @if (isset($row->id) && old('id', $row->state_id) == $key) @selected(true) @endif>
                            {{ $states }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <label>District Name<span> *</span></label>
                <input class="form-control" type="text" name="district_name" value="{{ isset($row->district_name) ? $row->district_name : old('district_name') }}" placeholder="Enter District Name">
                @error('district_name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="district_status" name="district_status" value="1" 
                    {{ isset($row->district_status) && $row->district_status ==  0? 'checked' : '' }}>
                <label>Disable This District</label>
            </div>
        </div>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection


