
<div class="col-lg-12 card">
    <div class="card-body">
        <input type="hidden" name="PTask" id="PTask" value="add" />
        <input type="hidden" name="id" id="id" value="{{ old('id') }}" />
        <input type="hidden" name="menuselect" id="menuselect" value="{{ old('menuselect') }}">
        <input type="hidden" name="type" id="type" value="{{ old('formtype') }}">
        <input type="hidden" name="pageurl" id="pageurl" value="{{ url()->current() }}">
        <input type="hidden" name="leadID" id="leadID" value="{{ old('leadID') }}">
        <input type="hidden" name="userID" id="userID" value="{{ old('userID') }}">

       
        <div class="row">
            <div class="col-md-9" style="border-right:1px solid #8080801c;">
       

        <div class="row">
            <div class="form-group col-md-2">
                <div class="form-floating form-floating-outline">
                    <input type="text" name="Invoicenumber" value="{{'Invoicenumber'}}" class="required form-control" id="Invoicenumber" readonly>
                    <label>Record No <span class="required" style="color:red;">*</span></label>
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="form-floating form-floating-outline">
                    <input type="text" id="Bill_No" name="Bill_No" value="{{ old('Bill_No') }}" class="required form-control">
                    <label>Bill No <span class="required" style="color:red;">*</span></label>
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="form-floating form-floating-outline">
                    <input type="text" id="billdate" name="billdate" value="" class="form-control required datepicker" data-inputmask="'mask': '99-99-9999'">
                    <label>Bill Date <span class="required" style="color:red;">*</span></label>
                </div>
            </div>
        </div>

        <br><br>

        <div id="proformatable">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" style="width:100%;font-size:12px" class="table table-striped table-hover table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>Types<span class="required" style="color:red;">*</span></th>
                                <th>SERVICES/PRODUCTS<span class="required" style="color:red;">*</span></th>
                                <th>PRODUCT SIZE<span class="required" style="color:red;">*</span></th>
                                <th>Stage<span class="required" style="color:red;">*</span></th>
                                <th>DESCRIPTION</th>
                                <th>QUANTITY<span class="required" style="color:red;">*</span></th>
                          
                                <th id="close" width='1%'>Action</th>
                   
                            </tr>
                        </thead>
                        <tbody id="p_scents">
                            <pre>
                    <?php
                    
                    print_r($products);
                    die;
                    ?></pre>
                            @foreach ($products as $key => $product)
                            <tr id="row_{{ $key }}">
                            <input type="hidden" name="row_id_{{ $key }}" id="row_id_{{ $key }}" value="{{ $product }}">

                            
                            <td>
                                    <select class="select2" id="types{{ $key }}" name="types{{ $key }}" data-placeholder="Select Types" style="height: 37px; width:100%;" required>
                                        <option></option>
                                        <option value="Product">Product</option>
                                        <option value="Service">Service</option>
                                    </select>
                                </td>
                                <td id="product_div_{{ $key }}">
                                    <select class="select2" id="services{{ $key }}" name="services{{ $key }}" data-placeholder="Select Services/Products" style="height: 37px; width:100%;" required>
                                        <option value=""></option>
                                        @foreach ($products as $info)
                                        <option value="{{ $info->id }}">{{ $info->product_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td id="size_div_{{ $key }}">
                                    <select class="select2 required" id="size{{ $key }}" name="size{{ $key }}" data-placeholder="Select Size" style="height: 37px; width:100%;" required>
                                        <option value=""></option>
                                        @foreach ($sizes as $info)
                                        <option value="{{ $info['id'] }}">{{ $info['product_size'] }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                <select class="select2" id="stage" name="stage" data-placeholder="Select Stage" style="height: 37px; width:100%;">
                                        <option></option>
                                        <option value="Semi Ripple">Semi Ripple</option> 
                                        <option value="Green">Green</option> 							 
                                        <option value="Full Ripple">Full Ripple</option> 							 
                                    </select>
                                </td>
                                <td>
                                    <textarea name="description{{ $key }}" id="description{{ $key }}" class="form-control input-sm" style="width:100%;"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="quantity{{ $key }}" name="quantity{{ $key }}" class="form-control smallinput" required>
                                </td>
                          
                                <td id="rmv_{{ $key }}">
                                    <a onClick="cancelrow('{{ $key }}');" style="cursor: pointer;" id="remove{{ $key }}" class="delete" title="Delete">
                                        <i class='fa fa-trash-o'></i>
                                    </a>
                                </td>
                             
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input onclick="addrow();" type="button" class="btn btn-danger btn-sm addbtn" style="width: 150px; float:right;" value="Add New">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function addRow(tableID) {
        var count = $("#cnt").val();
        var i = parseInt(count) + 1;

        // Define the new row
        var newRow = `
            <tr id="row_${i}">
                <td><input type="text" id="product_size${i}" class="form-control" placeholder="Product Size/Make" name="product_size${i}"></td>
                <td>
                  
                </td>
                <td><input type="number" id="dist_price${i}" class="form-control" placeholder="Price (Excluding Tax)" name="dist_price${i}"></td>
                <td><input type="number" id="bottom_price${i}" class="form-control" placeholder="Bottom Price" name="bottom_price${i}"></td>
                <td><input type="number" id="stock${i}" class="form-control" placeholder="Stock" name="stock${i}"></td>
                <td>
                    <i class="fa fa-trash text-danger" id="deleteRow_${i}" onclick="delete_row(this.id)" style="cursor:pointer;"></i>
                </td>
            </tr>`;

        // Append the new row
        $("#" + tableID + " tbody").append(newRow);

        // Update the row count
        $("#cnt").val(i);

        // Reinitialize select2 if necessary
        $(".select2").select2();
    }

    function delete_row(rwcnt) {
        var id = rwcnt.split("_");
        var cnt = parseInt(id[1]);
        var count = parseInt($("#cnt").val());

        if (count > 1) {
            var r = confirm("Are you sure you want to delete this row?");
            if (r == true) {
                // Remove the row
                $("#row_" + cnt).remove();

                // Renumber rows
                for (var k = cnt + 1; k <= count; k++) {
                    var newId = k - 1;

                    $("#row_" + k).attr("id", "row_" + newId);
                    $("#product_size" + k).attr("name", "product_size" + newId).attr("id", "product_size" + newId);
                    $("#unit" + k).attr("name", "unit" + newId).attr("id", "unit" + newId);
                    $("#dist_price" + k).attr("name", "dist_price" + newId).attr("id", "dist_price" + newId);
                    $("#bottom_price" + k).attr("name", "bottom_price" + newId).attr("id", "bottom_price" + newId);
                    $("#stock" + k).attr("name", "stock" + newId).attr("id", "stock" + newId);
                    $("#deleteRow_" + k).attr("id", "deleteRow_" + newId);
                }

                // Update the row count
                $("#cnt").val(count - 1);
            }
        } else {
            alert("At least one row is required.");
        }
    }
</script>
