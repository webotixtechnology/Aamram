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
          <h4>Users Management</h4>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">                                       
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form theme-form">
                            <form class="row g-3 custom-input" id="userForm"  action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admin.user.fields')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
        <!-- calendar js-->
        <script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
        <script>
            $(document).ready(function (){
                $('#country').on('change', function(){
                    var idCountry = this.value;
                    $("#state").html('');
                    $.ajax({
                        url: "{{ route('admin.user.get-states') }}",
                        type: "GET",
                        data: {
                            country_id: idCountry,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $.each(result.states, function (key, value) {
                                $("#state").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#country_code').select2({
                    templateResult: function(option) {
                        if (option.element && option.element.dataset.image) {
                            return $('<span><img src="' + option.element.dataset.image + '" width="20" height="15" /> ' + option.text + '</span>');
                        }
                        return  option.text;
                    }
                });
            });
        </script>
    @endsection