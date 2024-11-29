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
                    <h4>Product</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Product</li>
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
                        <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form" id="roleForm" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form theme-form">
    <!-- General Information Section -->
    <div class="row">
    <div class="card-body">
				<input type="hidden" name="PTask" id="PTask" value="Add"/>  
				<input type="hidden"  name="id" id="id" value=""/>
				
                    <!---- 1st block----------------->
                     <div class="row">
			
					<div class="form-group col-md-4" >
					<div class="form-floating form-floating-outline mb-5">
						<input type="text" name='product_name' id="product_name" placeholder="Product Name" value=""  class=" required form-control" onchange="checkproduct();" >
						<label for="inputEmail3" class="col-sm-4 control-label">Product Name<span class="required required_lbl">*</span></label>
					</div>
					</div>
	
	
					<div class="form-group col-md-4" >
					 <div class="form-floating form-floating-outline mb-5">
						
						<input type="text" name='hsn_no' id="hsn_no" placeholder="HSN Code" value=""  class=" required form-control" >
						<label>HSN/SAC Code<span class="required required_lbl">*</span></label>
						</div>
						</div>
						
						<div class="form-group col-md-4">
						 <div class="form-floating form-floating-outline mb-5">
							
							<input type="text" name='moq' id="moq" placeholder="MOQ" value=""  class="required form-control">
							<label>MOQ<span class="required required_lbl">*</span></label>
						</div>
						</div>
						
					</div>
					
					
					
					<div class="row"> 
					
						
						
					
					
<div class="form-group col-md-4">
    <div class="form-floating form-floating-outline mb-5">
        <select class="select2" id="product_type" name="product_type" data-placeholder="Select Product Type" style="height: 37px; width:100%;">
            <option></option>
            <option value="Product">Product</option> 
            <option value="Service">Service</option> 							 
            <option value="Spares">Spares</option> 							 
            <option value="Accessories">Accessories</option> 
            <option value="Kent">Kent</option>
        </select>
      
    </div>
</div>


				<div class="form-group col-md-4" >
				 <div class="form-floating form-floating-outline mb-5">
                
                    <textarea type="message" name='description'  value="" placeholder="Description" class=" form-control col-md-12 col-xs-12"  id="description"></textarea>
					  <label> Description <span class="required required_lbl"></span></label>
                </div> 
                </div> 
				
				</div>
				
					<div class="row">

			  <!-------------picture ------->
			 			<div class="form-group col-md-4">
							  <label for="inputEmail3" class="col-md-6 control-label">Company Signature <span class="required required_lbl"></span></label>

							  <div class="col-sm-7">
								
									<div id='signimgdiv' style='display:block'>
										<div id="fileuploader3" class="form-control" name="img" class="required">Upload </div>
									</div>
							</div>
				</div>
				
				</div>
						  
					<div class="row">

						<div class="form-group col-md-4" >
						 <div class="form-floating form-floating-outline mb-5">
						
						<input type="text" name='cgst' id="cgst" placeholder="CGST" value=""  class=" required form-control" >
						<label>CGST % <span class="required required_lbl">*</span></label>
						  </div>
						  </div>
					
					

						<div class="form-group col-md-4" >
						 <div class="form-floating form-floating-outline mb-5">
						
					<input type="text" name='sgst' id="sgst" placeholder="SGST" value=""  class=" required form-control  " >
						<label>SGST %<span class="required required_lbl">*</span></label>
					</div>
					</div>
					
						<div class="form-group col-md-4" >
						 <div class="form-floating form-floating-outline mb-5">
					
						<input type="text" name='igst' id="igst" placeholder="IGST" value=""  class=" required form-control  " >
							<label>IGST %<span class="required required_lbl">*</span></label>
					</div>
					</div>
					
					
				
					
	
					</div>
					<br><br>
<!--------------------------------Add row code-------------------------------------------------->
			
			
				  <div class="row" style="">
				<div class="col-md-12"> 
				<h4><b> </b></h4>
                <table class="table" id="mytable">
            <thead>
                <tr>
                    <th>Product Size/Make</th>
                    <th>Unit</th>
                    <th>Price (Excluding Tax)</th>
                    <th>Bottom Price</th>
                    <th>Stock</th>
                    <th width='2%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- First row -->
                <tr id="row_1">
                    <td><input type="text" id="product_size1" class="form-control" placeholder="Product Size/Make" name="product_size1"></td>
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
                    <td><input type="number" id="dist_price1" class="form-control" placeholder="Price (Excluding Tax)" name="dist_price1"></td>
                    <td><input type="number" id="bottom_price1" class="form-control" placeholder="Bottom Price" name="bottom_price1"></td>
                    <td><input type="number" id="stock1" class="form-control" placeholder="Stock" name="stock1"></td>
                    <td>
                        <i class="fa fa-trash text-danger" id="deleteRow_1" onclick="delete_row(this.id)" style="cursor:pointer;"></i>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="text-center">
                        <button type="button" class="btn btn-primary" id="addMore" onclick="addRow('mytable');">Add More</button>
                    </td>
                </tr>
            </tfoot>
        </table>
        <input type="hidden" name="cnt" id="cnt" value="1">
                                	
				
				</div>
				</div>
				
<div class="row">
        <div class="col">
            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </div>
    </div>
	


		 
                <input type="hidden" name="Task" value="">
                <input type="hidden" name="Uid" value="">
                <input type="hidden" name="Pono" value="">
    

   
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
                    <select class="form-select select2" id="unit${i}" name="unit${i}" data-placeholder="Select Unit">
                        <option value=""></option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                        @endforeach
                    </select>
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

