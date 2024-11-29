@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h4>Roles Management</h4>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">                                       
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Edit Role</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3 custom-input" id="roleForm" action="{{ route('admin.role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('admin.role.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.select-all-permission', function() {
            let value = $(this).prop('value');
            $('.module_' + value).prop('checked', $(this).prop('checked'));
        });
        $('.checkbox_animated').not('.select-all-permission').on('change', function() {
            let $this = $(this);
            let $label = $this.closest('label');
            let module = $label.data('module');
            let action = $label.data('action');
            let total_permissions = $('.module_' + module).length;
            let $selectAllCheckBox = $this.closest('.' + module + '-permission-list').find('.select-all-permission');
            let total_checked = $('.module_' + module).filter(':checked').length;
            let isAllChecked = total_checked === total_permissions;
            if ($this.prop('checked')) {
                $('.module_' + module + '_index').prop('checked', true);

            } else {
                let moduleCheckboxes = $(`input[type="checkbox"][data-module="${module}"]:checked`);
                if (moduleCheckboxes.length === 0) {
                    if (action === 'index') {
                        $('.module_' + module).prop('checked', false);
                    }
                    $(`.module_${module}_${action}`).prop('checked', false);
                    $('.select-all-for-' + module).prop('checked', false);
                }
            }

            $('.select-all-for-' + module).prop('checked', isAllChecked);
        });
    });
</script>
@endsection