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
                    <h4>Customer</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Customer</li>
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
                        <h4>Add Customer</h4>
                    </div>
                    <div class="card-body">
                    <form class="form theme-form" id="roleForm" action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          
                            @include('admin.customer.fields') <!-- Make sure you have the district fields -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
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
        $('#state_id').on('change', function(){
            var idstate = this.value;
            $("#district_id").html(''); // Clear previous districts
            $.ajax({
                url: "{{ route('admin.city.get-district') }}", // Correct the route name here
                type: "GET",
                data: {
                    state_id: idstate,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    // Check if the result contains the districts
                    if (result && result.districts) {
                        $.each(result.districts, function (key, value) {
                            $("#district_id").append('<option value="' + value.id + '">' + value.district_name + '</option>');
                        });
                    }
                }
            });
        });
    });
</script>

    @endsection

