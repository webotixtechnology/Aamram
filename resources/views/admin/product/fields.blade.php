<div class="form theme-form">
    <!-- General Information Section -->
      <!-- General Information Section -->
      <div class="row">


                            <div class="form-group col-md-4">
                                <label for="product_name">Product Name <span class="required">*</span></label>
                                <input type="text" name="product_name" id="product_name" value="<?php if(isset($pro_list)){ echo $pro_list['product_name']; } ?>" placeholder="Product Name" class="form-control" onchange="checkProduct();" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="hsn_no">HSN/SAC Code <span class="required">*</span></label>
                                <input type="text" name="hsn_no" id="hsn_no" placeholder="HSN Code" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="moq">MOQ <span class="required">*</span></label>
                                <input type="text" name="moq" id="moq" placeholder="MOQ" class="form-control" required>
                            </div>
                        </div>

                        <br> <br>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="product_type">Product Type</label>
                                <select class="form-select select2" id="product_type" name="product_type" data-placeholder="Select Product Type" required>
                                    <option></option>
                                    <option value="Product">Product</option>
                                    <option value="Service">Service</option>
                                  
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" placeholder="Description" class="form-control"></textarea>
                            </div>
                        </div>

                        <br> <br>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="cgst">CGST % <span class="required">*</span></label>
                                <input type="text" name="cgst" id="cgst" placeholder="CGST" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="sgst">SGST % <span class="required">*</span></label>
                                <input type="text" name="sgst" id="sgst" placeholder="SGST" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="igst">IGST % <span class="required">*</span></label>
                                <input type="text" name="igst" id="igst" placeholder="IGST" class="form-control" required>
                            </div>
                        </div>

                        <br> <br>

                        <!-- Dynamic Table -->
                        <h4>Product Variants</h4>
                        <table class="table" id="mytable">
                            <thead>
                                <tr>
                                    <th>Product Size/Make</th>
                                    <th>Unit</th>
                                    <th>Price (Excluding Tax)</th>
                                    <th>Bottom Price</th>
                                    <th>Stock</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="row_1">
                                    <td><input type="text" name="product_size1" class="form-control" placeholder="Product Size/Make"></td>
                                    <td>
                                    <select class="form-select select2" id="unit1" name="unit1" data-placeholder="Select Unit">
                            <option value=""></option>
                            @php
                                $units = DB::table('unit')->get();
                            @endphp
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                                    </td>
                                    <td><input type="number" name="dist_price1" class="form-control" placeholder="Price (Excluding Tax)"></td>
                                    <td><input type="number" name="bottom_price1" class="form-control" placeholder="Bottom Price"></td>
                                    <td><input type="number" name="stock1" class="form-control" placeholder="Stock"></td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(1)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <button type="button" class="btn btn-primary" onclick="addRow()">Add More</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="hidden" name="cnt" id="cnt" value="1">

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/vendors/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-validation/validation.js') }}"></script>

<script>
$(document).ready(function () {
    $(".select2").select2();
});

function addRow() {
    const cnt = parseInt($('#cnt').val()) + 1;
    const newRow = `
        <tr id="row_${cnt}">
            <td><input type="text" name="product_size${cnt}" class="form-control" placeholder="Product Size/Make"></td>
            <td>
                <select class="form-select select2" name="unit${cnt}" data-placeholder="Select Unit">
                    <option value=""></option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                    @endforeach
                </select>
            </td>
            <td><input type="number" name="dist_price${cnt}" class="form-control" placeholder="Price (Excluding Tax)"></td>
            <td><input type="number" name="bottom_price${cnt}" class="form-control" placeholder="Bottom Price"></td>
            <td><input type="number" name="stock${cnt}" class="form-control" placeholder="Stock"></td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(${cnt})">Delete</button>
            </td>
        </tr>`;
    $('#mytable tbody').append(newRow);
    $('#cnt').val(cnt);
    $(".select2").select2();
}

function deleteRow(rowId) {
    $(`#row_${rowId}`).remove();
}
</script>
