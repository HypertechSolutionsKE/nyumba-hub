function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}
function validateNumeric(num)
{
    //var x=document.forms["myForm"]["age"].value;
    //var re = /^[0-9]+$/;
    //return re.test(num);
    /*if (x.match(regex))
    {
        alert("Must input numbers");
        return false;
    }*/
    return isNaN(num);
}


//LISTING TYPES
function listing_type_add_clear(){
	//alert('Test');
	$( '#frm_addlistingtype' ).each(function(){
		this.reset();
	});	
	$div_add_listing_type_success.fadeOut("fast");
	$div_add_listing_type_error.fadeOut("fast");
}

function save_listing_type(){
		$div_add_listing_type_error = $("#div_add_listing_type_error");
		$div_add_listing_type_success = $("#div_add_listing_type_success");
				
		$add_listing_type_name = $("#add_listing_type_name").val();
		$add_listing_type_description = $("#add_listing_type_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($add_listing_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
			
		if ($valmsg != $valmsg2){
			$div_add_listing_type_error.html($valmsg);
			$div_add_listing_type_success.fadeOut("fast");
			$div_add_listing_type_error.fadeIn("fast");
		}else{
			$div_add_listing_type_error.fadeOut("fast");
			$div_add_listing_type_success.fadeOut("fast");
				
			$("#add_listing_type_loader").show();
					
			var form = document.getElementById('frm_addlistingtype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/listing_types/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_listing_type_loader").hide();
					if(res.status == 'ERR'){
						$div_add_listing_type_error.html(res.message);
						$div_add_listing_type_success.fadeOut("fast");
						$div_add_listing_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_listing_type_success.html(res.message);
						$div_add_listing_type_error.fadeOut("fast");
						$div_add_listing_type_success.fadeIn("fast");
						
						$( '#frm_addlistingtype' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_listing_types();

						//}
					}
            	},
				error: function(){
					$("#add_listing_type_loader").hide();
					$div_add_listing_type_error.html("Something went wrong. Please check your network and try again.");
					$div_add_listing_type_success.fadeOut("fast");
					$div_add_listing_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD LISTING TYPES
function load_listing_types(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/listing_types/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#listing_types_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function listing_type_edit_load(listing_type_id){
	$.ajax({
     	url: baseDir+'be/listing_types/get_listing_type/'+listing_type_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_listing_type_id").val(obj['listing_type_id']);
	     		$("#edit_listing_type_name").val(obj['listing_type_name']);
	     		$("#edit_listing_type_description").val(obj['listing_type_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_listing_type_error.fadeOut("fast");
	$div_edit_listing_type_success.fadeOut("fast");

}
function update_listing_type(){
		$div_edit_listing_type_error = $("#div_edit_listing_type_error");
		$div_edit_listing_type_success = $("#div_edit_listing_type_success");
				
		$edit_listing_type_name = $("#edit_listing_type_name").val();
		$edit_listing_type_description = $("#edit_listing_type_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_listing_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_listing_type_error.html($valmsg);
			$div_edit_listing_type_success.fadeOut("fast");
			$div_edit_listing_type_error.fadeIn("fast");
		}else{
			$div_edit_listing_type_error.fadeOut("fast");
			$div_edit_listing_type_success.fadeOut("fast");
				
			$("#edit_listing_type_loader").show();
					
			var form = document.getElementById('frm_editlistingtype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/listing_types/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_listing_type_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_listing_type_error.html(res.message);
						$div_edit_listing_type_success.fadeOut("fast");
						$div_edit_listing_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_listing_type_success.html(res.message);
						$div_edit_listing_type_error.fadeOut("fast");
						$div_edit_listing_type_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_listing_types();

						//}
					}
            	},
				error: function(){
					$("#edit_listing_type_loader").hide();
					$div_edit_listing_type_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_listing_type_success.fadeOut("fast");
					$div_edit_listing_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_listing_type(listing_type_id){
	$div_listing_type_error = $("#div_listing_type_error");
	$div_listing_type_success = $("#div_listing_type_success");

	$div_listing_type_error.fadeOut("fast");
	$div_listing_type_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/listing_types/delete/'+listing_type_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_listing_type_error.html(obj['message']);
					$div_listing_type_success.fadeOut("fast");
					$div_listing_type_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_listing_type_success.html(obj['message']);
					$div_listing_type_error.fadeOut("fast");
					$div_listing_type_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_listing_type_error.html("Something went wrong. Please check your network and try again.");
			$div_listing_type_success.fadeOut("fast");
			$div_listing_type_error.fadeIn("fast");
		}
    });
}








//PROPERTY TYPES
function property_type_add_clear(){
	//alert('Test');
	$( '#frm_addpropertytype' ).each(function(){
		this.reset();
	});	
	$div_add_property_type_success.fadeOut("fast");
	$div_add_property_type_error.fadeOut("fast");
}

function save_property_type(){
		$div_add_property_type_error = $("#div_add_property_type_error");
		$div_add_property_type_success = $("#div_add_property_type_success");
				
		$add_property_type_name = $("#add_property_type_name").val();
		$add_property_type_description = $("#add_property_type_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($add_property_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		if (!$("#add_bedrooms").is(":checked") && !$("#add_bathrooms").is(":checked") && !$("#add_total_rooms").is(":checked") && !$("#add_living_area").is(":checked") && !$("#add_floor").is(":checked") && !$("#add_total_floors").is(":checked") && !$("#add_land_size").is(":checked") && !$("#add_building_size").is(":checked")){
			$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select at least one property type feature <br/>";
		}
		if ($valmsg != $valmsg2){
			$div_add_property_type_error.html($valmsg);
			$div_add_property_type_success.fadeOut("fast");
			$div_add_property_type_error.fadeIn("fast");
		}else{
			$div_add_property_type_error.fadeOut("fast");
			$div_add_property_type_success.fadeOut("fast");
				
			$("#add_property_type_loader").show();
					
			var form = document.getElementById('frm_addpropertytype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_types/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_property_type_loader").hide();
					if(res.status == 'ERR'){
						$div_add_property_type_error.html(res.message);
						$div_add_property_type_success.fadeOut("fast");
						$div_add_property_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_property_type_success.html(res.message);
						$div_add_property_type_error.fadeOut("fast");
						$div_add_property_type_success.fadeIn("fast");
						
						$( '#frm_addlistingtype' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_types();

						//}
					}
            	},
				error: function(){
					$("#add_property_type_loader").hide();
					$div_add_property_type_error.html("Something went wrong. Please check your network and try again.");
					$div_add_property_type_success.fadeOut("fast");
					$div_add_property_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD LISTING TYPES
function load_property_types(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/property_types/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#property_types_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function property_type_edit_load(property_type_id){
	$.ajax({
     	url: baseDir+'be/property_types/get_property_type/'+property_type_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_property_type_id").val(obj['property_type_id']);
	     		$("#edit_property_type_name").val(obj['property_type_name']);
	     		$("#edit_property_type_description").val(obj['property_type_description']);
	     		if (obj['bedrooms'] == 1){$("#edit_bedrooms").prop("checked", true);}else{$("#edit_bedrooms").prop("checked", false);}
	     		if (obj['bathrooms'] == 1){$("#edit_bathrooms").prop("checked", true);}else{$("#edit_bathrooms").prop("checked", false);}
	     		if (obj['total_rooms'] == 1){$("#edit_total_rooms").prop("checked", true);}else{$("#edit_total_rooms").prop("checked", false);}
	     		if (obj['living_area'] == 1){$("#edit_living_area").prop("checked", true);}else{$("#edit_living_area").prop("checked", false);}
	     		if (obj['floor'] == 1){$("#edit_floor").prop("checked", true);}else{$("#edit_floor").prop("checked", false);}
	     		if (obj['total_floors'] == 1){$("#edit_total_floors").prop("checked", true);}else{$("#edit_total_floors").prop("checked", false);}
	     		if (obj['land_size'] == 1){$("#edit_land_size").prop("checked", true);}else{$("#edit_land_size").prop("checked", false);}
	     		if (obj['building_size'] == 1){$("#edit_building_size").prop("checked", true);}else{$("#edit_building_size").prop("checked", false);}
     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_property_type_error.fadeOut("fast");
	$div_edit_property_type_success.fadeOut("fast");

}
function update_property_type(){
		$div_edit_property_type_error = $("#div_edit_property_type_error");
		$div_edit_property_type_success = $("#div_edit_property_type_success");
				
		$edit_property_type_name = $("#edit_property_type_name").val();
		$edit_property_type_description = $("#edit_property_type_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_property_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		if (!$("#edit_bedrooms").is(":checked") && !$("#edit_bathrooms").is(":checked") && !$("#edit_total_rooms").is(":checked") && !$("#edit_living_area").is(":checked") && !$("#edit_floor").is(":checked") && !$("#edit_total_floors").is(":checked") && !$("#edit_land_size").is(":checked") && !$("#edit_building_size").is(":checked")){
			$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select at least one property type feature <br/>";
		}
		
		if ($valmsg != $valmsg2){
			$div_edit_property_type_error.html($valmsg);
			$div_edit_property_type_success.fadeOut("fast");
			$div_edit_property_type_error.fadeIn("fast");
		}else{
			$div_edit_property_type_error.fadeOut("fast");
			$div_edit_property_type_success.fadeOut("fast");
				
			$("#edit_property_type_loader").show();
					
			var form = document.getElementById('frm_editpropertytype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_types/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_property_type_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_property_type_error.html(res.message);
						$div_edit_property_type_success.fadeOut("fast");
						$div_edit_property_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_property_type_success.html(res.message);
						$div_edit_property_type_error.fadeOut("fast");
						$div_edit_property_type_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_types();

						//}
					}
            	},
				error: function(){
					$("#edit_property_type_loader").hide();
					$div_edit_property_type_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_property_type_success.fadeOut("fast");
					$div_edit_property_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_property_type(property_type_id){
    //alert('Am clicked!');
    $div_property_type_error = $("#div_property_type_error");
    $div_property_type_success = $("#div_property_type_success");

    $div_property_type_error.fadeOut("fast");
    $div_property_type_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/property_types/delete/'+property_type_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_property_type_error.html(obj['message']);
                    $div_property_type_success.fadeOut("fast");
                    $div_property_type_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_property_type_success.html(obj['message']);
                    $div_property_type_error.fadeOut("fast");
                    $div_property_type_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_property_type_error.html("Something went wrong. Please check your network and try again.");
            $div_property_type_success.fadeOut("fast");
            $div_property_type_error.fadeIn("fast");
        }
    });
}








//PROPERTY SUBCATEGORIES
function property_subcategory_add_clear(){
	//alert('Test');
	$( '#frm_addpropertysubcategory' ).each(function(){
		this.reset();
	});	
	$div_add_property_subcategory_success.fadeOut("fast");
	$div_add_property_subcategory_error.fadeOut("fast");
}

function save_property_subcategory(){
	$div_add_property_subcategory_error = $("#div_add_property_subcategory_error");
	$div_add_property_subcategory_success = $("#div_add_property_subcategory_success");
				
	$add_property_type_id = $("#add_property_type_id").val();
	$add_property_subcategory_name = $("#add_property_subcategory_name").val();
	$add_property_subcategory_description = $("#add_property_subcategory_description").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_property_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Type<br/>";}
	if ($add_property_subcategory_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
				
	if ($valmsg != $valmsg2){
		$div_add_property_subcategory_error.html($valmsg);
		$div_add_property_subcategory_success.fadeOut("fast");
		$div_add_property_subcategory_error.fadeIn("fast");
	}else{
		$div_add_property_subcategory_error.fadeOut("fast");
		$div_add_property_subcategory_success.fadeOut("fast");
				
		$("#add_property_subcategory_loader").show();
				
		var form = document.getElementById('frm_addpropertysubcategory');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/property_subcategories/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_property_subcategory_loader").hide();
				if(res.status == 'ERR'){
					$div_add_property_subcategory_error.html(res.message);
					$div_add_property_subcategory_success.fadeOut("fast");
					$div_add_property_subcategory_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_property_subcategory_success.html(res.message);
					$div_add_property_subcategory_error.fadeOut("fast");
					$div_add_property_subcategory_success.fadeIn("fast");
				
					$( '#frm_addpropertysubcategory' ).each(function(){
						this.reset();
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_property_subcategories();
					//}
				}
           	},
			error: function(){
				$("#add_property_subcategory_loader").hide();
				$div_add_property_subcategory_error.html("Something went wrong. Please check your network and try again.");
				$div_add_property_subcategory_success.fadeOut("fast");
				$div_add_property_subcategory_error.fadeIn("fast");
			}
       	});
	}
	return false;
}
//LOAD LISTING TYPES
function load_property_subcategories(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/property_subcategories/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#property_subcategories_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function property_subcategory_edit_load(property_subcategory_id){
	$.ajax({
     	url: baseDir+'be/property_subcategories/get_property_subcategory/'+property_subcategory_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);

	     		$("#edit_property_type_id").val(obj['property_type_id']).change(); 
	     		$("#edit_property_subcategory_id").val(obj['property_subcategory_id']);
	     		$("#edit_property_subcategory_name").val(obj['property_subcategory_name']);
	     		$("#edit_property_subcategory_description").val(obj['property_subcategory_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_property_subcategory_error.fadeOut("fast");
	$div_edit_property_subcategory_success.fadeOut("fast");

}
function update_property_subcategory(){
		$div_edit_property_subcategory_error = $("#div_edit_property_subcategory_error");
		$div_edit_property_subcategory_success = $("#div_edit_property_subcategory_success");
				
		$edit_property_type_id = $("#edit_property_type_id").val();
		$edit_property_subcategory_name = $("#edit_property_subcategory_name").val();
		$edit_property_subcategory_description = $("#edit_property_subcategory_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_property_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Type<br/>";}
		if ($edit_property_subcategory_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_property_subcategory_error.html($valmsg);
			$div_edit_property_subcategory_success.fadeOut("fast");
			$div_edit_property_subcategory_error.fadeIn("fast");
		}else{
			$div_edit_property_subcategory_error.fadeOut("fast");
			$div_edit_property_subcategory_success.fadeOut("fast");
				
			$("#edit_property_subcategory_loader").show();
					
			var form = document.getElementById('frm_editpropertysubcategory');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_subcategories/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_property_subcategory_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_property_subcategory_error.html(res.message);
						$div_edit_property_subcategory_success.fadeOut("fast");
						$div_edit_property_subcategory_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_property_subcategory_success.html(res.message);
						$div_edit_property_subcategory_error.fadeOut("fast");
						$div_edit_property_subcategory_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_subcategories();

						//}
					}
            	},
				error: function(){
					$("#edit_property_subcategory_loader").hide();
					$div_edit_property_subcategory_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_property_subcategory_success.fadeOut("fast");
					$div_edit_property_subcategory_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_property_subcategory(property_subcategory_id){
	$div_property_subcategory_error = $("#div_property_subcategory_error");
	$div_property_subcategory_success = $("#div_property_subcategory_success");

	$div_property_subcategory_error.fadeOut("fast");
	$div_property_subcategory_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/property_subcategories/delete/'+property_subcategory_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_property_subcategory_error.html(obj['message']);
					$div_property_subcategory_success.fadeOut("fast");
					$div_property_subcategory_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_property_subcategory_success.html(obj['message']);
					$div_property_subcategory_error.fadeOut("fast");
					$div_property_subcategory_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_property_subcategory_error.html("Something went wrong. Please check your network and try again.");
			$div_property_subcategory_success.fadeOut("fast");
			$div_property_subcategory_error.fadeIn("fast");
		}
    });
}








//LISTING TYPES
function region_add_clear(){
	//alert('Test');
	$( '#frm_addregion' ).each(function(){
		this.reset();
	});	
	$div_add_region_success.fadeOut("fast");
	$div_add_region_error.fadeOut("fast");
}

function save_region(){
		$div_add_region_error = $("#div_add_region_error");
		$div_add_region_success = $("#div_add_region_success");
				
		$add_region_name = $("#add_region_name").val();
		$add_region_description = $("#add_region_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($add_region_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_add_region_error.html($valmsg);
			$div_add_region_success.fadeOut("fast");
			$div_add_region_error.fadeIn("fast");
		}else{
			$div_add_region_error.fadeOut("fast");
			$div_add_region_success.fadeOut("fast");
				
			$("#add_region_loader").show();
					
			var form = document.getElementById('frm_addregion');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/regions/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_region_loader").hide();
					if(res.status == 'ERR'){
						$div_add_region_error.html(res.message);
						$div_add_region_success.fadeOut("fast");
						$div_add_region_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_region_success.html(res.message);
						$div_add_region_error.fadeOut("fast");
						$div_add_region_success.fadeIn("fast");
						
						$( '#frm_addregion' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_region').modal('hide');
						//load_regions();

						//}
					}
            	},
				error: function(){
					$("#add_region_loader").hide();
					$div_add_region_error.html("Something went wrong. Please check your network and try again.");
					$div_add_region_success.fadeOut("fast");
					$div_add_region_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD REGIONS
function load_regions(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/regions/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#regions_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function region_edit_load(region_id){
	$.ajax({
     	url: baseDir+'be/regions/get_region/'+region_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_region_id").val(obj['region_id']);
	     		$("#edit_region_name").val(obj['region_name']);
	     		$("#edit_region_description").val(obj['region_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_region_error.fadeOut("fast");
	$div_edit_region_success.fadeOut("fast");

}
function update_region(){
		$div_edit_region_error = $("#div_edit_region_error");
		$div_edit_region_success = $("#div_edit_region_success");
				
		$edit_region_name = $("#edit_region_name").val();
		$edit_region_description = $("#edit_region_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_region_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_region_error.html($valmsg);
			$div_edit_region_success.fadeOut("fast");
			$div_edit_region_error.fadeIn("fast");
		}else{
			$div_edit_region_error.fadeOut("fast");
			$div_edit_region_success.fadeOut("fast");
				
			$("#edit_region_loader").show();
					
			var form = document.getElementById('frm_editregion');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/regions/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_region_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_region_error.html(res.message);
						$div_edit_region_success.fadeOut("fast");
						$div_edit_region_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_region_success.html(res.message);
						$div_edit_region_error.fadeOut("fast");
						$div_edit_region_success.fadeIn("fast");
						
						/*$( '#frm_editregion' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_region').modal('hide');
						//load_regions();

						//}
					}
            	},
				error: function(){
					$("#edit_region_loader").hide();
					$div_edit_region_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_region_success.fadeOut("fast");
					$div_edit_region_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_region(region_id){
	$div_region_error = $("#div_region_error");
	$div_region_success = $("#div_region_success");

	$div_region_error.fadeOut("fast");
	$div_region_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/regions/delete/'+region_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_region_error.html(obj['message']);
					$div_region_success.fadeOut("fast");
					$div_region_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_region_success.html(obj['message']);
					$div_region_error.fadeOut("fast");
					$div_region_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_region_error.html("Something went wrong. Please check your network and try again.");
			$div_region_success.fadeOut("fast");
			$div_region_error.fadeIn("fast");
		}
    });
}








//CITY
function city_add_clear(){
	//alert('Test');
	$( '#frm_addcity' ).each(function(){
		this.reset();
	});	
	$div_add_city_success.fadeOut("fast");
	$div_add_city_error.fadeOut("fast");
}

function save_city(){
	$div_add_city_error = $("#div_add_city_error");
	$div_add_city_success = $("#div_add_city_success");
				
	$add_region_id = $("#add_region_id").val();
	$add_city_name = $("#add_city_name").val();
	$add_city_description = $("#add_city_description").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_region_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Type<br/>";}
	if ($add_city_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
				
	if ($valmsg != $valmsg2){
		$div_add_city_error.html($valmsg);
		$div_add_city_success.fadeOut("fast");
		$div_add_city_error.fadeIn("fast");
	}else{
		$div_add_city_error.fadeOut("fast");
		$div_add_city_success.fadeOut("fast");
				
		$("#add_city_loader").show();
				
		var form = document.getElementById('frm_addcity');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/cities/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_city_loader").hide();
				if(res.status == 'ERR'){
					$div_add_city_error.html(res.message);
					$div_add_city_success.fadeOut("fast");
					$div_add_city_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_city_success.html(res.message);
					$div_add_city_error.fadeOut("fast");
					$div_add_city_success.fadeIn("fast");
				
					$( '#frm_addpropertysubcategory' ).each(function(){
						this.reset();
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_cities();
					//}
				}
           	},
			error: function(){
				$("#add_city_loader").hide();
				$div_add_city_error.html("Something went wrong. Please check your network and try again.");
				$div_add_city_success.fadeOut("fast");
				$div_add_city_error.fadeIn("fast");
			}
       	});
	}
	return false;
}
//LOAD LISTING TYPES
function load_cities(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/cities/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#cities_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function city_edit_load(city_id){
	$.ajax({
     	url: baseDir+'be/cities/get_city/'+city_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);

	     		$("#edit_region_id").val(obj['region_id']).change(); 
	     		$("#edit_city_id").val(obj['city_id']);
	     		$("#edit_city_name").val(obj['city_name']);
	     		$("#edit_city_description").val(obj['city_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_city_error.fadeOut("fast");
	$div_edit_city_success.fadeOut("fast");

}
function update_city(){
		$div_edit_city_error = $("#div_edit_city_error");
		$div_edit_city_success = $("#div_edit_city_success");
				
		$edit_region_id = $("#edit_region_id").val();
		$edit_city_name = $("#edit_city_name").val();
		$edit_city_description = $("#edit_city_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_region_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Type<br/>";}
		if ($edit_city_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_city_error.html($valmsg);
			$div_edit_city_success.fadeOut("fast");
			$div_edit_city_error.fadeIn("fast");
		}else{
			$div_edit_city_error.fadeOut("fast");
			$div_edit_city_success.fadeOut("fast");
				
			$("#edit_city_loader").show();
					
			var form = document.getElementById('frm_editcity');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/cities/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_city_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_city_error.html(res.message);
						$div_edit_city_success.fadeOut("fast");
						$div_edit_city_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_city_success.html(res.message);
						$div_edit_city_error.fadeOut("fast");
						$div_edit_city_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_subcategories();

						//}
					}
            	},
				error: function(){
					$("#edit_city_loader").hide();
					$div_edit_city_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_city_success.fadeOut("fast");
					$div_edit_city_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_city(city_id){
	$div_city_error = $("#div_city_error");
	$div_city_success = $("#div_city_success");

	$div_city_error.fadeOut("fast");
	$div_city_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/cities/delete/'+city_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_city_error.html(obj['message']);
					$div_city_success.fadeOut("fast");
					$div_city_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_city_success.html(obj['message']);
					$div_city_error.fadeOut("fast");
					$div_city_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_city_error.html("Something went wrong. Please check your network and try again.");
			$div_city_success.fadeOut("fast");
			$div_city_error.fadeIn("fast");
		}
    });
}








//AREAS
$(document).ready(function(){
	$("#add_area_region_id").on('change', function() {
    	//alert( this.value );
    	$("#add_area_city_id")
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value=""></option>')
    		.val('')
		;
    	if (this.value != ''){
			$.ajax({
		     	url: baseDir+'be/cities/get_cities_by_region/'+this.value,
		       	type: 'POST',
		       	data: '',
		       	xhr: function() {
		       		var myXhr = $.ajaxSettings.xhr();
		       		return myXhr;
		       	},
		       	cache: false,
		       	contentType: false,
		       	processData: false,
		     	success: function (res) {
		     		try{
		     			var obj1 = res;
						// preserve newlines, etc - use valid JSON
						obj1 = obj1.replace(/\\n/g, "\\n")  
						               .replace(/\\'/g, "\\'")
						               .replace(/\\"/g, '\\"')
						               .replace(/\\&/g, "\\&")
						               .replace(/\\r/g, "\\r")
						               .replace(/\\t/g, "\\t")
						               .replace(/\\b/g, "\\b")
						               .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						obj1 = obj1.replace(/[\u0000-\u0019]+/g,""); 
			     		var obj = JSON.parse(obj1);
			     		for (i=0; i< obj.length; i++){ 
         					$("#add_area_city_id").append($("<option>").attr('value',obj[i]['city_id']).text(obj[i]['city_name']));
  						};	

		     		}catch(err){
		     			alert(err);
		     		}
		   		},
				error: function(){
				}
		    });
    	}
    })
 	$("#edit_area_region_id").on('change', function() {
    	//alert( this.value );
    	$("#edit_area_city_id")
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value=""></option>')
    		.val('')
		;
    	if (this.value != ''){
			$.ajax({
		     	url: baseDir+'be/cities/get_cities_by_region/'+this.value,
		       	type: 'POST',
		       	data: '',
		       	xhr: function() {
		       		var myXhr = $.ajaxSettings.xhr();
		       		return myXhr;
		       	},
		       	cache: false,
		       	contentType: false,
		       	processData: false,
		     	success: function (res) {
		     		try{
		     			var obj1 = res;
						// preserve newlines, etc - use valid JSON
						obj1 = obj1.replace(/\\n/g, "\\n")  
						               .replace(/\\'/g, "\\'")
						               .replace(/\\"/g, '\\"')
						               .replace(/\\&/g, "\\&")
						               .replace(/\\r/g, "\\r")
						               .replace(/\\t/g, "\\t")
						               .replace(/\\b/g, "\\b")
						               .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						obj1 = obj1.replace(/[\u0000-\u0019]+/g,""); 
			     		var obj = JSON.parse(obj1);
			     		for (i=0; i< obj.length; i++){ 
         					$("#edit_area_city_id").append($("<option>").attr('value',obj[i]['city_id']).text(obj[i]['city_name']));
  						};	

		     		}catch(err){
		     			alert(err);
		     		}
		   		},
				error: function(){
				}
		    });
    	}
    })
}); 


function area_add_clear(){
	//alert('Test');
	$( '#frm_addarea' ).each(function(){
		this.reset();
	});	
	$div_add_area_success.fadeOut("fast");
	$div_add_area_error.fadeOut("fast");
}

function save_area(){
	$div_add_area_error = $("#div_add_area_error");
	$div_add_area_success = $("#div_add_area_success");
				
	$add_region_id = $("#add_area_region_id").val();
	$add_city_id = $("#add_area_city_id").val();
	$add_area_name = $("#add_area_name").val();
	$add_area_description = $("#add_area_description").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_region_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Region<br/>";}
	if ($add_city_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select City/Town<br/>";}
	if ($add_area_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Area Name <br/>";}
				
	if ($valmsg != $valmsg2){
		$div_add_area_error.html($valmsg);
		$div_add_area_success.fadeOut("fast");
		$div_add_area_error.fadeIn("fast");
	}else{
		$div_add_area_error.fadeOut("fast");
		$div_add_area_success.fadeOut("fast");
				
		$("#add_area_loader").show();
				
		var form = document.getElementById('frm_addarea');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/areas/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_area_loader").hide();
				if(res.status == 'ERR'){
					$div_add_area_error.html(res.message);
					$div_add_area_success.fadeOut("fast");
					$div_add_area_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_area_success.html(res.message);
					$div_add_area_error.fadeOut("fast");
					$div_add_area_success.fadeIn("fast");
				
					$( '#frm_addarea' ).each(function(){
						this.reset();
						$("#add_area_region_id").val('').trigger('change');
						$("#add_area_city_id").val('').trigger('change');
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_areas();
					//}
				}
           	},
			error: function(){
				$("#add_area_loader").hide();
				$div_add_area_error.html("Something went wrong. Please check your network and try again.");
				$div_add_area_success.fadeOut("fast");
				$div_add_area_error.fadeIn("fast");
			}
       	});
	}
	return false;
}
//LOAD LISTING TYPES
function load_areas(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/areas/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#areas_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function area_edit_load(area_id){
	$.ajax({
     	url: baseDir+'be/areas/get_area/'+area_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);

	     		$("#edit_area_region_id").val(obj['region_id']).trigger('change'); 
	     		//alert(obj['city_id']);
				$("#edit_area_city_id").val(obj['city_id']).trigger('change'); 
	     		//alert('am here!');
	     		$("#edit_area_id").val(obj['area_id']);
	     		$("#edit_area_name").val(obj['area_name']);
	     		$("#edit_area_description").val(obj['area_description']);
				
     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_area_error.fadeOut("fast");
	$div_edit_area_success.fadeOut("fast");

}
function update_area(){
		$div_edit_area_error = $("#div_edit_area_error");
		$div_edit_area_success = $("#div_edit_area_success");
				
		$edit_area_region_id = $("#edit_area_region_id").val();
		$edit_area_city_id = $("#edit_area_city_id").val();
		$edit_area_name = $("#edit_area_name").val();
		$edit_area_description = $("#edit_area_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_area_region_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Region<br/>";}
		if ($edit_area_city_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select City/Town<br/>";}
		if ($edit_area_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Area Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_area_error.html($valmsg);
			$div_edit_area_success.fadeOut("fast");
			$div_edit_area_error.fadeIn("fast");
		}else{
			$div_edit_area_error.fadeOut("fast");
			$div_edit_area_success.fadeOut("fast");
				
			$("#edit_area_loader").show();
					
			var form = document.getElementById('frm_editarea');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/areas/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_area_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_area_error.html(res.message);
						$div_edit_area_success.fadeOut("fast");
						$div_edit_area_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_area_success.html(res.message);
						$div_edit_area_error.fadeOut("fast");
						$div_edit_area_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_subcategories();

						//}
					}
            	},
				error: function(){
					$("#edit_area_loader").hide();
					$div_edit_area_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_area_success.fadeOut("fast");
					$div_edit_area_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_area(area_id){
	$div_area_error = $("#div_area_error");
	$div_area_success = $("#div_area_success");

	$div_area_error.fadeOut("fast");
	$div_area_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/areas/delete/'+area_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_area_error.html(obj['message']);
					$div_area_success.fadeOut("fast");
					$div_area_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_area_success.html(obj['message']);
					$div_area_error.fadeOut("fast");
					$div_area_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_area_error.html("Something went wrong. Please check your network and try again.");
			$div_area_success.fadeOut("fast");
			$div_area_error.fadeIn("fast");
		}
    });
}







//PROPERTY TYPES
function property_feature_type_add_clear(){
	//alert('Test');
	$( '#frm_addpropertyfeaturetype' ).each(function(){
		this.reset();
	});	
	$div_add_property_feature_type_success.fadeOut("fast");
	$div_add_property_feature_type_error.fadeOut("fast");
}

function save_property_feature_type(){
		$div_add_property_feature_type_error = $("#div_add_property_feature_type_error");
		$div_add_property_feature_type_success = $("#div_add_property_feature_type_success");
				
		$add_property_feature_type_name = $("#add_property_feature_type_name").val();
		$add_property_feature_type_description = $("#add_property_feature_type_description").val();
	

		if ($add_property_feature_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Property Feature Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_add_property_feature_type_error.html($valmsg);
			$div_add_property_feature_type_success.fadeOut("fast");
			$div_add_property_feature_type_error.fadeIn("fast");
		}else{
			$div_add_property_feature_type_error.fadeOut("fast");
			$div_add_property_feature_type_success.fadeOut("fast");
				
			$("#add_property_feature_type_loader").show();
					
			var form = document.getElementById('frm_addpropertyfeaturetype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_feature_types/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_property_feature_type_loader").hide();
					if(res.status == 'ERR'){
						$div_add_property_feature_type_error.html(res.message);
						$div_add_property_feature_type_success.fadeOut("fast");
						$div_add_property_feature_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_property_feature_type_success.html(res.message);
						$div_add_property_feature_type_error.fadeOut("fast");
						$div_add_property_feature_type_success.fadeIn("fast");
						
						$( '#frm_addpropertyfeaturetype' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_feature_types();
						//}
					}
            	},
				error: function(){
					$("#add_property_feature_type_loader").hide();
					$div_add_property_feature_type_error.html("Something went wrong. Please check your network and try again.");
					$div_add_property_feature_type_success.fadeOut("fast");
					$div_add_property_feature_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD LISTING TYPES
function load_property_feature_types(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/property_feature_types/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#property_feature_types_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function property_feature_type_edit_load(property_feature_type_id){
	$.ajax({
     	url: baseDir+'be/property_feature_types/get_property_feature_type/'+property_feature_type_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_property_feature_type_id").val(obj['property_feature_type_id']);
	     		$("#edit_property_feature_type_name").val(obj['property_feature_type_name']);
	     		$("#edit_property_feature_type_description").val(obj['property_feature_type_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_property_feature_type_error.fadeOut("fast");
	$div_edit_property_feature_type_success.fadeOut("fast");

}
function update_property_feature_type(){
		$div_edit_property_feature_type_error = $("#div_edit_property_feature_type_error");
		$div_edit_property_feature_type_success = $("#div_edit_property_feature_type_success");
				
		$edit_property_feature_type_name = $("#edit_property_feature_type_name").val();
		$edit_property_feature_type_description = $("#edit_property_feature_type_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_property_feature_type_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Listing Type Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_property_feature_type_error.html($valmsg);
			$div_edit_property_feature_type_success.fadeOut("fast");
			$div_edit_property_feature_type_error.fadeIn("fast");
		}else{
			$div_edit_property_feature_type_error.fadeOut("fast");
			$div_edit_property_feature_type_success.fadeOut("fast");
				
			$("#edit_property_feature_type_loader").show();
					
			var form = document.getElementById('frm_editpropertyfeaturetype');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_feature_types/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_property_feature_type_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_property_feature_type_error.html(res.message);
						$div_edit_property_feature_type_success.fadeOut("fast");
						$div_edit_property_feature_type_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_property_feature_type_success.html(res.message);
						$div_edit_property_feature_type_error.fadeOut("fast");
						$div_edit_property_feature_type_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_feature_types();

						//}
					}
            	},
				error: function(){
					$("#edit_property_feature_type_loader").hide();
					$div_edit_property_feature_type_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_property_feature_type_success.fadeOut("fast");
					$div_edit_property_feature_type_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_property_feature_type(property_feature_type_id){
    //alert('Am clicked!');
    $div_property_feature_type_error = $("#div_property_feature_type_error");
    $div_property_feature_type_success = $("#div_property_feature_type_success");

    $div_property_feature_type_error.fadeOut("fast");
    $div_property_feature_type_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/property_feature_types/delete/'+property_feature_type_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_property_feature_type_error.html(obj['message']);
                    $div_property_feature_type_success.fadeOut("fast");
                    $div_property_feature_type_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_property_feature_type_success.html(obj['message']);
                    $div_property_feature_type_error.fadeOut("fast");
                    $div_property_feature_type_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_property_feature_type_error.html("Something went wrong. Please check your network and try again.");
            $div_property_feature_type_success.fadeOut("fast");
            $div_property_feature_type_error.fadeIn("fast");
        }
    });
}








//PROPERTY FEATURES
function property_feature_add_clear(){
	//alert('Test');
	$( '#frm_addpropertyfeature' ).each(function(){
		this.reset();
	});	
	$div_add_property_feature_success.fadeOut("fast");
	$div_add_property_feature_error.fadeOut("fast");
}

function save_property_feature(){
	$div_add_property_feature_error = $("#div_add_property_feature_error");
	$div_add_property_feature_success = $("#div_add_property_feature_success");
				
	$add_property_feature_type_id = $("#add_property_feature_type_id").val();
	$add_property_feature_name = $("#add_property_feature_name").val();
	$add_property_feature_description = $("#add_property_feature_description").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_property_feature_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Feature Type<br/>";}
	if ($add_property_feature_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Property Feature Name <br/>";}
				
	if ($valmsg != $valmsg2){
		$div_add_property_feature_error.html($valmsg);
		$div_add_property_feature_success.fadeOut("fast");
		$div_add_property_feature_error.fadeIn("fast");
	}else{
		$div_add_property_feature_error.fadeOut("fast");
		$div_add_property_feature_success.fadeOut("fast");
				
		$("#add_property_feature_loader").show();
				
		var form = document.getElementById('frm_addpropertyfeature');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/property_features/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_property_feature_loader").hide();
				if(res.status == 'ERR'){
					$div_add_property_feature_error.html(res.message);
					$div_add_property_feature_success.fadeOut("fast");
					$div_add_property_feature_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_property_feature_success.html(res.message);
					$div_add_property_feature_error.fadeOut("fast");
					$div_add_property_feature_success.fadeIn("fast");
				
					$( '#frm_addpropertyfeature' ).each(function(){
						this.reset();
						$("#add_property_feature_type_id").val('').trigger('change');
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_property_features();
					//}
				}
           	},
			error: function(){
				$("#add_property_feature_loader").hide();
				$div_add_property_feature_error.html("Something went wrong. Please check your network and try again.");
				$div_add_property_feature_success.fadeOut("fast");
				$div_add_property_feature_error.fadeIn("fast");
			}
       	});
	}
	return false;
}

//LOAD LISTING TYPES
function load_property_features(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/property_features/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#property_features_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function property_feature_edit_load(property_feature_id){
	$.ajax({
     	url: baseDir+'be/property_features/get_property_feature/'+property_feature_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);

	     		$("#edit_property_feature_type_id").val(obj['property_feature_type_id']).change(); 
	     		$("#edit_property_feature_id").val(obj['property_feature_id']);
	     		$("#edit_property_feature_name").val(obj['property_feature_name']);
	     		$("#edit_property_feature_description").val(obj['property_feature_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_property_feature_error.fadeOut("fast");
	$div_edit_property_feature_success.fadeOut("fast");

}
function update_property_feature(){
		$div_edit_property_feature_error = $("#div_edit_property_feature_error");
		$div_edit_property_feature_success = $("#div_edit_property_feature_success");
				
		$edit_property_feature_type_id = $("#edit_property_feature_type_id").val();
		$edit_property_feature_name = $("#edit_property_feature_name").val();
		$edit_property_feature_description = $("#edit_property_feature_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_property_feature_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Feature Type<br/>";}
		if ($edit_property_feature_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Property Feature Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_property_feature_error.html($valmsg);
			$div_edit_property_feature_success.fadeOut("fast");
			$div_edit_property_feature_error.fadeIn("fast");
		}else{
			$div_edit_property_feature_error.fadeOut("fast");
			$div_edit_property_feature_success.fadeOut("fast");
				
			$("#edit_property_feature_loader").show();
					
			var form = document.getElementById('frm_editpropertyfeature');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/property_features/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_property_feature_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_property_feature_error.html(res.message);
						$div_edit_property_feature_success.fadeOut("fast");
						$div_edit_property_feature_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_property_feature_success.html(res.message);
						$div_edit_property_feature_error.fadeOut("fast");
						$div_edit_property_feature_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_property_features();

						//}
					}
            	},
				error: function(){
					$("#edit_property_feature_loader").hide();
					$div_edit_property_feature_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_property_feature_success.fadeOut("fast");
					$div_edit_property_feature_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_property_feature(property_feature_id){
	$div_property_feature_error = $("#div_property_feature_error");
	$div_property_feature_success = $("#div_property_feature_success");

	$div_property_feature_error.fadeOut("fast");
	$div_property_feature_success.fadeOut("fast");

	$.ajax({
     	url: baseDir+'be/property_features/delete/'+property_feature_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
	     		var obj = $.parseJSON(obj1);

				if(obj['status'] == 'ERR'){
					$div_property_feature_error.html(obj['message']);
					$div_property_feature_success.fadeOut("fast");
					$div_property_feature_error.fadeIn("fast");
				}else if (obj['status'] == 'SUCCESS'){
					$div_property_feature_success.html(obj['message']);
					$div_property_feature_error.fadeOut("fast");
					$div_property_feature_success.fadeIn("fast");
				}
     		}catch(err){
     			alert(err);
     		}    		
   		},
		error: function(){
			$div_property_feature_error.html("Something went wrong. Please check your network and try again.");
			$div_property_feature_success.fadeOut("fast");
			$div_property_feature_error.fadeIn("fast");
		}
    });
}











//PROPERTY TYPES
function currency_add_clear(){
	//alert('Test');
	$( '#frm_addcurrency' ).each(function(){
		this.reset();
	});	
	$div_add_currency_success.fadeOut("fast");
	$div_add_currency_error.fadeOut("fast");
}

function save_currency(){
		$div_add_currency_error = $("#div_add_currency_error");
		$div_add_currency_success = $("#div_add_currency_success");
				
		$add_country_name = $("#add_country_name").val();
		$add_country_code = $("#add_country_code").val();		
		$add_currency_name = $("#add_currency_name").val();
		$add_currency_symbol = $("#add_currency_symbol").val();

  		$valmsg = "";
		$valmsg2 = "";
	
		if ($add_country_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Country Name <br/>";}
		if ($add_country_code == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Country Code <br/>";}
		if ($add_currency_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Currency Name <br/>";}
		if ($add_currency_symbol == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Currency Symbol <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_add_currency_error.html($valmsg);
			$div_add_currency_success.fadeOut("fast");
			$div_add_currency_error.fadeIn("fast");
		}else{
			$div_add_currency_error.fadeOut("fast");
			$div_add_currency_success.fadeOut("fast");
				
			$("#add_currency_loader").show();
					
			var form = document.getElementById('frm_addcurrency');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/currencies/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_currency_loader").hide();
					if(res.status == 'ERR'){
						$div_add_currency_error.html(res.message);
						$div_add_currency_success.fadeOut("fast");
						$div_add_currency_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_currency_success.html(res.message);
						$div_add_currency_error.fadeOut("fast");
						$div_add_currency_success.fadeIn("fast");
						
						$( '#frm_addlistingtype' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_currencies();

						//}
					}
            	},
				error: function(){
					$("#add_currency_loader").hide();
					$div_add_currency_error.html("Something went wrong. Please check your network and try again.");
					$div_add_currency_success.fadeOut("fast");
					$div_add_currency_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD LISTING TYPES
function load_currencies(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/currencies/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#currencies_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function currency_edit_load(currency_id){
	$.ajax({
     	url: baseDir+'be/currencies/get_currency/'+currency_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
			     $("#edit_currency_id").val(obj['currency_id']);
			     $("#edit_country_name").val(obj['country_name']);
			     $("#edit_country_code").val(obj['country_code']);
			     $("#edit_currency_name").val(obj['currency_name']);
			     $("#edit_currency_symbol").val(obj['currency_symbol']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_currency_error.fadeOut("fast");
	$div_edit_currency_success.fadeOut("fast");

}
function update_currency(){
		$div_edit_currency_error = $("#div_edit_currency_error");
		$div_edit_currency_success = $("#div_edit_currency_success");
				
		$edit_country_name = $("#edit_country_name").val();
		$edit_country_code = $("#edit_country_code").val();		
		$edit_currency_name = $("#edit_currency_name").val();
		$edit_currency_symbol = $("#edit_currency_symbol").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_country_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Country Name <br/>";}
		if ($edit_country_code == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Country Code <br/>";}
		if ($edit_currency_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Currency Name <br/>";}
		if ($edit_currency_symbol == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Currency Symbol <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_currency_error.html($valmsg);
			$div_edit_currency_success.fadeOut("fast");
			$div_edit_currency_error.fadeIn("fast");
		}else{
			$div_edit_currency_error.fadeOut("fast");
			$div_edit_currency_success.fadeOut("fast");
				
			$("#edit_currency_loader").show();
					
			var form = document.getElementById('frm_editcurrency');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/currencies/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_currency_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_currency_error.html(res.message);
						$div_edit_currency_success.fadeOut("fast");
						$div_edit_currency_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_currency_success.html(res.message);
						$div_edit_currency_error.fadeOut("fast");
						$div_edit_currency_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_currencies();

						//}
					}
            	},
				error: function(){
					$("#edit_currency_loader").hide();
					$div_edit_currency_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_currency_success.fadeOut("fast");
					$div_edit_currency_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_currency(currency_id){
    //alert('Am clicked!');
    $div_currency_error = $("#div_currency_error");
    $div_currency_success = $("#div_currency_success");

    $div_currency_error.fadeOut("fast");
    $div_currency_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/currencies/delete/'+currency_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_currency_error.html(obj['message']);
                    $div_currency_success.fadeOut("fast");
                    $div_currency_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_currency_success.html(obj['message']);
                    $div_currency_error.fadeOut("fast");
                    $div_currency_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_currency_error.html("Something went wrong. Please check your network and try again.");
            $div_currency_success.fadeOut("fast");
            $div_currency_error.fadeIn("fast");
        }
    });
}









//ACCESS LEVELS
function access_level_add_clear(){
	//alert('Test');
	$( '#frm_addaccesslevel' ).each(function(){
		this.reset();
	});	
	$div_add_access_level_success.fadeOut("fast");
	$div_add_access_level_error.fadeOut("fast");
}

function save_access_level(){
		$div_add_access_level_error = $("#div_add_access_level_error");
		$div_add_access_level_success = $("#div_add_access_level_success");
				
		$add_access_level_name = $("#add_access_level_name").val();
		$add_access_level_description = $("#add_access_level_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($add_access_level_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Access Level Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_add_access_level_error.html($valmsg);
			$div_add_access_level_success.fadeOut("fast");
			$div_add_access_level_error.fadeIn("fast");
		}else{
			$div_add_access_level_error.fadeOut("fast");
			$div_add_access_level_success.fadeOut("fast");
				
			$("#add_access_level_loader").show();
					
			var form = document.getElementById('frm_addaccesslevel');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/access_levels/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#add_access_level_loader").hide();
					if(res.status == 'ERR'){
						$div_add_access_level_error.html(res.message);
						$div_add_access_level_success.fadeOut("fast");
						$div_add_access_level_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_add_access_level_success.html(res.message);
						$div_add_access_level_error.fadeOut("fast");
						$div_add_access_level_success.fadeIn("fast");
						
						$( '#frm_addaccesslevel' ).each(function(){
							this.reset();
						});	
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_access_levels();

						//}
					}
            	},
				error: function(){
					$("#add_access_level_loader").hide();
					$div_add_access_level_error.html("Something went wrong. Please check your network and try again.");
					$div_add_access_level_success.fadeOut("fast");
					$div_add_access_level_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
//LOAD LISTING TYPES
function load_access_levels(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/access_levels/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#access_levels_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function access_level_edit_load(access_level_id){
	$.ajax({
     	url: baseDir+'be/access_levels/get_access_level/'+access_level_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_access_level_id").val(obj['access_level_id']);
	     		$("#edit_access_level_name").val(obj['access_level_name']);
	     		$("#edit_access_level_description").val(obj['access_level_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_access_level_error.fadeOut("fast");
	$div_edit_access_level_success.fadeOut("fast");

}
function update_access_level(){
		$div_edit_access_level_error = $("#div_edit_access_level_error");
		$div_edit_access_level_success = $("#div_edit_access_level_success");
				
		$edit_access_level_name = $("#edit_access_level_name").val();
		$edit_access_level_description = $("#edit_access_level_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_access_level_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Access Level Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_access_level_error.html($valmsg);
			$div_edit_access_level_success.fadeOut("fast");
			$div_edit_access_level_error.fadeIn("fast");
		}else{
			$div_edit_access_level_error.fadeOut("fast");
			$div_edit_access_level_success.fadeOut("fast");
				
			$("#edit_access_level_loader").show();
					
			var form = document.getElementById('frm_editaccesslevel');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/access_levels/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_access_level_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_access_level_error.html(res.message);
						$div_edit_access_level_success.fadeOut("fast");
						$div_edit_access_level_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_access_level_success.html(res.message);
						$div_edit_access_level_error.fadeOut("fast");
						$div_edit_access_level_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_access_levels();

						//}
					}
            	},
				error: function(){
					$("#edit_access_level_loader").hide();
					$div_edit_access_level_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_access_level_success.fadeOut("fast");
					$div_edit_access_level_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_access_level(access_level_id){
    //alert('Am clicked!');
    $div_access_level_error = $("#div_access_level_error");
    $div_access_level_success = $("#div_access_level_success");

    $div_access_level_error.fadeOut("fast");
    $div_access_level_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/access_levels/delete/'+access_level_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_access_level_error.html(obj['message']);
                    $div_access_level_success.fadeOut("fast");
                    $div_access_level_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_access_level_success.html(obj['message']);
                    $div_access_level_error.fadeOut("fast");
                    $div_access_level_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_access_level_error.html("Something went wrong. Please check your network and try again.");
            $div_access_level_success.fadeOut("fast");
            $div_access_level_error.fadeIn("fast");
        }
    });
}








//DEPARTMENTS
function department_add_clear(){
	//alert('Test');
	$( '#frm_adddepartment' ).each(function(){
		this.reset();
	});	
	$div_add_department_success.fadeOut("fast");
	$div_add_department_error.fadeOut("fast");
}

function save_department(){
	$div_add_department_error = $("#div_add_department_error");
	$div_add_department_success = $("#div_add_department_success");
				
	$add_department_name = $("#add_department_name").val();
	$add_department_description = $("#add_department_description").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_department_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Access Level Name <br/>";}
		
	if ($valmsg != $valmsg2){
		$div_add_department_error.html($valmsg);
		$div_add_department_success.fadeOut("fast");
		$div_add_department_error.fadeIn("fast");
	}else{
		$div_add_department_error.fadeOut("fast");
		$div_add_department_success.fadeOut("fast");
				
		$("#add_department_loader").show();
					
		var form = document.getElementById('frm_adddepartment');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/departments/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_department_loader").hide();
				if(res.status == 'ERR'){
					$div_add_department_error.html(res.message);
					$div_add_department_success.fadeOut("fast");
					$div_add_department_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_department_success.html(res.message);
					$div_add_department_error.fadeOut("fast");
					$div_add_department_success.fadeIn("fast");
					
					$( '#frm_adddepartment' ).each(function(){
						this.reset();
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_departments();
						//}
				}
           	},
			error: function(){
				$("#add_department_loader").hide();
				$div_add_department_error.html("Something went wrong. Please check your network and try again.");
				$div_add_department_success.fadeOut("fast");
				$div_add_department_error.fadeIn("fast");
			}
       	});

	}
	return false;
}
//LOAD LISTING TYPES
function load_departments(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/departments/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#departments_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function department_edit_load(department_id){
	$.ajax({
     	url: baseDir+'be/departments/get_department/'+department_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);
	     		$("#edit_department_id").val(obj['department_id']);
	     		$("#edit_department_name").val(obj['department_name']);
	     		$("#edit_department_description").val(obj['department_description']);

     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_department_error.fadeOut("fast");
	$div_edit_department_success.fadeOut("fast");

}
function update_department(){
		$div_edit_department_error = $("#div_edit_department_error");
		$div_edit_department_success = $("#div_edit_department_success");
				
		$edit_department_name = $("#edit_department_name").val();
		$edit_department_description = $("#edit_department_description").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($edit_department_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Access Level Name <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_department_error.html($valmsg);
			$div_edit_department_success.fadeOut("fast");
			$div_edit_department_error.fadeIn("fast");
		}else{
			$div_edit_department_error.fadeOut("fast");
			$div_edit_department_success.fadeOut("fast");
				
			$("#edit_department_loader").show();
					
			var form = document.getElementById('frm_editdepartment');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/departments/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_department_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_department_error.html(res.message);
						$div_edit_department_success.fadeOut("fast");
						$div_edit_department_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_department_success.html(res.message);
						$div_edit_department_error.fadeOut("fast");
						$div_edit_department_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_departments();

						//}
					}
            	},
				error: function(){
					$("#edit_department_loader").hide();
					$div_edit_department_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_department_success.fadeOut("fast");
					$div_edit_department_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_department(department_id){
    //alert('Am clicked!');
    $div_department_error = $("#div_department_error");
    $div_department_success = $("#div_department_success");

    $div_department_error.fadeOut("fast");
    $div_department_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/departments/delete/'+department_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_department_error.html(obj['message']);
                    $div_department_success.fadeOut("fast");
                    $div_department_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_department_success.html(obj['message']);
                    $div_department_error.fadeOut("fast");
                    $div_department_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_department_error.html("Something went wrong. Please check your network and try again.");
            $div_department_success.fadeOut("fast");
            $div_department_error.fadeIn("fast");
        }
    });
}









//COMPANY INFORMATION
function save_company_information(){
		//alert('Am here');
		$div_company_information_error = $("#div_company_information_error");
		$div_company_information_success = $("#div_company_information_success");
				
		$company_name = $("#company_name").val();
		$phone_number = $("#phone_number").val();
	
		$valmsg = "";
		$valmsg2 = "";
		
		if ($company_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Company Name <br/>";}
		if ($phone_number == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Phone Number <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_company_information_error.html($valmsg);
			$div_company_information_success.fadeOut("fast");
			$div_company_information_error.fadeIn("fast");
		}else{
			$div_company_information_error.fadeOut("fast");
			$div_company_information_success.fadeOut("fast");
				
			$("#company_information_loader").show();
					
			var form = document.getElementById('frm_companyinformation');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/company_information/save',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#company_information_loader").hide();
					if(res.status == 'ERR'){
						$div_company_information_error.html(res.message);
						$div_company_information_success.fadeOut("fast");
						$div_company_information_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_company_information_success.html(res.message);
						$div_company_information_error.fadeOut("fast");
						$div_company_information_success.fadeIn("fast");
					}
            	},
				error: function(){
					$("#company_information_loader").hide();
					$div_company_information_error.html("Something went wrong. Please check your network and try again.");
					$div_company_information_success.fadeOut("fast");
					$div_company_information_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
	
}







//SYSTEM USERS
function system_user_add_clear(){
	//alert('Test');
	$( '#frm_addsystemuser' ).each(function(){
		this.reset();
	});	
	$div_add_system_user_success.fadeOut("fast");
	$div_add_system_user_error.fadeOut("fast");
}

function save_system_user(){
	$div_add_system_user_error = $("#div_add_system_user_error");
	$div_add_system_user_success = $("#div_add_system_user_success");
				
	$add_first_name = $("#add_first_name").val();
	$add_last_name = $("#add_last_name").val();
	$add_user_password = $("#add_user_password").val();
	$add_confirm_password = $("#add_confirm_password").val();
	$add_email_address = $("#add_email_address").val();
	$add_access_level_id = $("#add_access_level_id").val();
	
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($add_first_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter First Name <br/>";}
	if ($add_last_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Last Name <br/>";}
	if ($add_email_address == ""){
		$valmsg = $valmsg + "<i class='fa fa-exclamation'></i> Please enter Email Address<br/>";
	}else if(!validateEmail($add_email_address)){
		$valmsg = $valmsg + "<i class='fa fa-exclamation'></i> Please enter the correct Email format <br/>";
	}
	if ($add_user_password == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Password <br/>";}
	if ($add_confirm_password == ""){
		$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Confirm Password <br/>";
	}else if ($add_user_password != $add_confirm_password){
		$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please retype the correct Password <br/>";
	}
	if ($add_access_level_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Access Level <br/>";}

		
	if ($valmsg != $valmsg2){
		$div_add_system_user_error.html($valmsg);
		$div_add_system_user_success.fadeOut("fast");
		$div_add_system_user_error.fadeIn("fast");
	}else{
		$div_add_system_user_error.fadeOut("fast");
		$div_add_system_user_success.fadeOut("fast");
				
		$("#add_system_user_loader").show();
					
		var form = document.getElementById('frm_addsystemuser');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/system_users/save',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#add_system_user_loader").hide();
				if(res.status == 'ERR'){
					$div_add_system_user_error.html(res.message);
					$div_add_system_user_success.fadeOut("fast");
					$div_add_system_user_error.fadeIn("fast");
				}else if (res.status == 'SUCCESS'){
					$div_add_system_user_success.html(res.message);
					$div_add_system_user_error.fadeOut("fast");
					$div_add_system_user_success.fadeIn("fast");
					
					$( '#frm_addsystemuser' ).each(function(){
						this.reset();
						$("#add_gender").val('').trigger('change');
						$("#add_department_id").val('').trigger('change');
						$("#add_access_level_id").val('').trigger('change');						
					});	
					//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
					//if ($r == true) {						    
					//} else {
					//$('#modal_add_listingtype').modal('hide');
					//load_system_users();
					//}
				}
           	},
			error: function(){
				$("#add_system_user_loader").hide();
				$div_add_system_user_error.html("Something went wrong. Please check your network and try again.");
				$div_add_system_user_success.fadeOut("fast");
				$div_add_system_user_error.fadeIn("fast");
			}
       	});
	
	}
		return false;
}
//LOAD LISTING TYPES
function load_system_users(){
	//$("#tableLoading").show();
				
	$.ajax({
     	url: baseDir+'be/system_users/loadjs',
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (result) {
			$("#system_users_div").html(result);
			//$("#tableLoading").hide();
   		},
		error: function(){
			//$("#tableLoading").hide();
		}
    });
}
function system_user_edit_load(system_user_id){
	$.ajax({
     	url: baseDir+'be/system_users/get_system_user/'+system_user_id,
       	type: 'POST',
       	data: '',
       	xhr: function() {
       		var myXhr = $.ajaxSettings.xhr();
       		return myXhr;
       	},
       	cache: false,
       	contentType: false,
       	processData: false,
     	success: function (res) {
     		try{
     			var obj1 = res;
     			obj1 = obj1.replace('[','');
     			obj1 = obj1.replace(']','');
	     		var obj = $.parseJSON(obj1);

				$("#edit_user_id").val(obj['user_id']);	     			
	     		$("#edit_first_name").val(obj['first_name']);
	     		$("#edit_last_name").val(obj['last_name']);
	     		$("#edit_phone_number").val(obj['phone_number']);
	     		$("#edit_email_address").val(obj['email_address']);
	     		$("#edit_gender").val(obj['gender']).change(); 
	     		$("#edit_department_id").val(obj['department_id']).change(); 
	     		$("#edit_access_level_id").val(obj['access_level_id']).change(); 	     		
     		}catch(err){
     			alert(err);
     		}
   		},
		error: function(){
		}
    });
   	$div_edit_system_user_error.fadeOut("fast");
	$div_edit_system_user_success.fadeOut("fast");

}
function update_system_user(){
	$div_edit_system_user_error = $("#div_edit_system_user_error");
	$div_edit_system_user_success = $("#div_edit_system_user_success");
				
	$edit_first_name = $("#edit_first_name").val();
	$edit_last_name = $("#edit_last_name").val();
	$edit_email_address = $("#edit_email_address").val();
	$edit_access_level_id = $("#aedit 	_access_level_id").val();
	
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($edit_first_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter First Name <br/>";}
	if ($edit_last_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Last Name <br/>";}
	if ($edit_email_address == ""){
		$valmsg = $valmsg + "<i class='fa fa-exclamation'></i> Please enter Email Address<br/>";
	}else if(!validateEmail($edit_email_address)){
		$valmsg = $valmsg + "<i class='fa fa-exclamation'></i> Please enter the correct Email format <br/>";
	}
	if ($edit_access_level_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Access Level <br/>";}
		
		if ($valmsg != $valmsg2){
			$div_edit_system_user_error.html($valmsg);
			$div_edit_system_user_success.fadeOut("fast");
			$div_edit_system_user_error.fadeIn("fast");
		}else{
			$div_edit_system_user_error.fadeOut("fast");
			$div_edit_system_user_success.fadeOut("fast");
				
			$("#edit_system_user_loader").show();
					
			var form = document.getElementById('frm_editsystemuser');
			var formData = new FormData(form);

			$.ajax({
            	url: baseDir+'be/system_users/update',
            	type: 'POST',
            	data: formData,
				dataType: 'json',
            	xhr: function() {
               		var myXhr = $.ajaxSettings.xhr();
               		return myXhr;
            	},
            	cache: false,
            	contentType: false,
            	processData: false,
            	success: function (res) {
					$("#edit_system_user_loader").hide();
					if(res.status == 'ERR'){
						$div_edit_system_user_error.html(res.message);
						$div_edit_system_user_success.fadeOut("fast");
						$div_edit_system_user_error.fadeIn("fast");
					}else if (res.status == 'SUCCESS'){
						$div_edit_system_user_success.html(res.message);
						$div_edit_system_user_error.fadeOut("fast");
						$div_edit_system_user_success.fadeIn("fast");
						
						/*$( '#frm_editlistingtype' ).each(function(){
							this.reset();
						});	*/
						//$r = confirm("Listing Type added successfully. Would you like to add another listing type?");
						//if ($r == true) {						    
						//} else {
						//$('#modal_add_listingtype').modal('hide');
						//load_system_users();

						//}
					}
            	},
				error: function(){
					$("#edit_system_user_loader").hide();
					$div_edit_system_user_error.html("Something went wrong. Please check your network and try again.");
					$div_edit_system_user_success.fadeOut("fast");
					$div_edit_system_user_error.fadeIn("fast");
				}
        	});
	
		}
		return false;
}
function delete_system_user(system_user_id){
    //alert('Am clicked!');
    $div_system_user_error = $("#div_system_user_error");
    $div_system_user_success = $("#div_system_user_success");

    $div_system_user_error.fadeOut("fast");
    $div_system_user_success.fadeOut("fast");

    $.ajax({
        url: baseDir+'be/system_users/delete/'+system_user_id,
        type: 'POST',
        data: '',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
            try{
                var obj1 = res;
                var obj = $.parseJSON(obj1);

                if(obj['status'] == 'ERR'){
                    $div_system_user_error.html(obj['message']);
                    $div_system_user_success.fadeOut("fast");
                    $div_system_user_error.fadeIn("fast");
                }else if (obj['status'] == 'SUCCESS'){
                    $div_system_user_success.html(obj['message']);
                    $div_system_user_error.fadeOut("fast");
                    $div_system_user_success.fadeIn("fast");
                }
            }catch(err){
                alert(err);
            }           
        },
        error: function(){
            $div_system_user_error.html("Something went wrong. Please check your network and try again.");
            $div_system_user_success.fadeOut("fast");
            $div_system_user_error.fadeIn("fast");
        }
    });
}



//ADD PROPERTY
$(document).ready(function(){
	$("#property_type_id").on('change', function() {
    	//alert( this.value );
    	//$("#edit_department_id").val(obj['department_id']).change(); 

    	$("#property_subcategory_id")
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value=""></option>')
    		.val('').change()
		;
    	if (this.value != ''){
			$.ajax({
		     	url: baseDir+'be/property_subcategories/get_property_subcategories_by_property_type/'+this.value,
		       	type: 'POST',
		       	data: '',
		       	xhr: function() {
		       		var myXhr = $.ajaxSettings.xhr();
		       		return myXhr;
		       	},
		       	cache: false,
		       	contentType: false,
		       	processData: false,
		     	success: function (res) {
		     		try{
		     			var obj1 = res;
						// preserve newlines, etc - use valid JSON
						obj1 = obj1.replace(/\\n/g, "\\n")  
						               .replace(/\\'/g, "\\'")
						               .replace(/\\"/g, '\\"')
						               .replace(/\\&/g, "\\&")
						               .replace(/\\r/g, "\\r")
						               .replace(/\\t/g, "\\t")
						               .replace(/\\b/g, "\\b")
						               .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						obj1 = obj1.replace(/[\u0000-\u0019]+/g,""); 
			     		var obj = JSON.parse(obj1);
			     		for (i=0; i< obj.length; i++){ 
         					$("#property_subcategory_id").append($("<option>").attr('value',obj[i]['property_subcategory_id']).text(obj[i]['property_subcategory_name']));
  						};

						$("#property_subcategory_id").val($property_subcat_id).trigger('change');

		     		}catch(err){
		     			alert(err);
		     		}
		   		},
				error: function(){
				}
		    });
    	}
    }).trigger('change');

    $("#region_id").on('change', function() {
    	//alert( this.value );
    	$("#city_id")
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value=""></option>')
    		.val('').change()
		;
    	if (this.value != ''){
			$.ajax({
		     	url: baseDir+'be/cities/get_cities_by_region/'+this.value,
		       	type: 'POST',
		       	data: '',
		       	xhr: function() {
		       		var myXhr = $.ajaxSettings.xhr();
		       		return myXhr;
		       	},
		       	cache: false,
		       	contentType: false,
		       	processData: false,
		     	success: function (res) {
		     		try{
		     			var obj1 = res;
						// preserve newlines, etc - use valid JSON
						obj1 = obj1.replace(/\\n/g, "\\n")  
						               .replace(/\\'/g, "\\'")
						               .replace(/\\"/g, '\\"')
						               .replace(/\\&/g, "\\&")
						               .replace(/\\r/g, "\\r")
						               .replace(/\\t/g, "\\t")
						               .replace(/\\b/g, "\\b")
						               .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						obj1 = obj1.replace(/[\u0000-\u0019]+/g,""); 
			     		var obj = JSON.parse(obj1);
			     		for (i=0; i< obj.length; i++){ 
         					$("#city_id").append($("<option>").attr('value',obj[i]['city_id']).text(obj[i]['city_name']));
  						};	

						$("#city_id").val($cit_id).trigger('change');

		     		}catch(err){
		     			alert(err);
		     		}
		   		},
				error: function(){
				}
		    });
    	}
    }).trigger('change');
	$("#city_id").on('change', function() {
    	//alert( this.value );
    	$("#area_id")
    		.find('option')
    		.remove()
    		.end()
    		.append('<option value=""></option>')
    		.val('').change()
		;
    	if (this.value != ''){
			$.ajax({
		     	url: baseDir+'be/areas/get_areas_by_city/'+this.value,
		       	type: 'POST',
		       	data: '',
		       	xhr: function() {
		       		var myXhr = $.ajaxSettings.xhr();
		       		return myXhr;
		       	},
		       	cache: false,
		       	contentType: false,
		       	processData: false,
		     	success: function (res) {
		     		try{
		     			var obj1 = res;
						// preserve newlines, etc - use valid JSON
						obj1 = obj1.replace(/\\n/g, "\\n")  
						               .replace(/\\'/g, "\\'")
						               .replace(/\\"/g, '\\"')
						               .replace(/\\&/g, "\\&")
						               .replace(/\\r/g, "\\r")
						               .replace(/\\t/g, "\\t")
						               .replace(/\\b/g, "\\b")
						               .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						obj1 = obj1.replace(/[\u0000-\u0019]+/g,""); 
			     		var obj = JSON.parse(obj1);
			     		for (i=0; i< obj.length; i++){ 
         					$("#area_id").append($("<option>").attr('value',obj[i]['area_id']).text(obj[i]['area_name']));
  						};	

						$("#area_id").val($cit_id).trigger('change');

		     		}catch(err){
		     			alert(err);
		     		}
		   		},
				error: function(){
				}
		    });
    	}
    }).trigger('change');
}); 

function save_new_property_start(){
	$div_new_property_start_error = $("#div_new_property_start_error");
	$div_new_property_start_success = $("#div_new_property_start_success");
				
	$listing_type_id = $("#listing_type_id").val();
	$property_title = $("#property_title").val();
	$property_type_id = $("#property_type_id").val();
	$property_subcategory_id = $("#property_subcategory_id").val();
	$region_id = $("#region_id").val();
	$city_id = $("#city_id").val();
	$area_id = $("#area_id").val();
	$physical_address = $("#physical_address").val();
	$longitude = $("#longitude").val();
	$latitude = $("#latitude").val();
	$price = $("#price").val();
	$currency_id = $("#currency_id").val();	
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($listing_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Listing Type <br/>";}
	if ($property_title == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Property Title <br/>";}
	if ($property_type_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Type <br/>";}
	if ($property_subcategory_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Property Subcategory <br/>";}
	if ($region_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Region <br/>";}
	if ($city_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select City/Town <br/>";}
	if ($area_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Area/Locality <br/>";}
	if ($physical_address == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Address <br/>";}
	if ($longitude != ""){
		if (validateNumeric($longitude)){
			$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Only numeric values are allowed for Longitude <br/>";
		}
	}
	if ($latitude != ""){
		if (validateNumeric($latitude)){
			$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Only numeric values are allowed for Latitude <br/>";
		}
	}
	if ($price == ""){
		$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Price <br/>";
	}else if (validateNumeric($price)){
		$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Only numeric values are allowed for Price <br/>";
	}
	if ($currency_id == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Currency <br/>";}

		
	if ($valmsg != $valmsg2){
		$div_new_property_start_error.html($valmsg);
		$div_new_property_start_success.fadeOut("fast");
		$div_new_property_start_error.fadeIn("fast");
		$('html, body').animate({ scrollTop: $('#div_new_property_start_error').offset().top-90 }, 'slow');
	}else{
		$div_new_property_start_error.fadeOut("fast");
		$div_new_property_start_success.fadeOut("fast");
				
		$("#new_property_start_loader").show();
					
		var form = document.getElementById('frm_newpropertystart');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/properties/save_start',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#new_property_start_loader").hide();
				if(res.status == 'ERR'){
					$div_new_property_start_error.html(res.message);
					$div_new_property_start_success.fadeOut("fast");
					$div_new_property_start_error.fadeIn("fast");
					$('html, body').animate({ scrollTop: $('#div_new_property_start_error').offset().top-90 }, 'slow');
				}else if (res.status == 'SUCCESS'){
					window.location = "add_features";					
				}
           	},
			error: function(){
				$("#new_property_start_loader").hide();
				$div_new_property_start_error.html("Something went wrong. Please check your network and try again.");
				$div_new_property_start_success.fadeOut("fast");
				$div_new_property_start_error.fadeIn("fast");
				$('html, body').animate({ scrollTop: $('#div_new_property_start_error').offset().top-90 }, 'slow');
			}
       	});
	
	}
	return false;

}

function save_new_property_features(){
	$valmsg = "";
	$valmsg2 = "";

	$div_new_property_features_error = $("#div_new_property_features_error");
	$div_new_property_features_success = $("#div_new_property_features_success");

	if ($('#bedrooms').length){
		$bedrooms = $("#bedrooms").val();
		if ($bedrooms == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter the number of Bedrooms that your property has <br/>";}
	}
	if ($('#bathrooms').length){
		$bathrooms = $("#bathrooms").val();
		if ($bathrooms == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter the number of Bathrooms that your property has <br/>";}
	}
	if ($('#living_area').length){
		$living_area = $("#living_area").val();
		if ($living_area == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please indicate how large your property's Living area is <br/>";}
	}
	if ($('#building_size').length){
		$building_size = $("#building_size").val();
		if ($building_size == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please indicate how large your property's Building size is <br/>";}
	}
	if ($('#land_size').length){
		$land_size = $("#land_size").val();
		if ($land_size == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please indicate how large your property's Land size area is <br/>";}
	}
	$description = $("#description").val();
	if ($description == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter your property's description <br/>";}

	if ($valmsg != $valmsg2){
		$div_new_property_features_error.html($valmsg);
		$div_new_property_features_success.fadeOut("fast");
		$div_new_property_features_error.fadeIn("fast");
		$('html, body').animate({ scrollTop: $('#div_new_property_features_error').offset().top-90 }, 'slow');
	}else{
		$div_new_property_features_error.fadeOut("fast");
		$div_new_property_features_success.fadeOut("fast");
				
		$("#new_property_features_loader").show();
					
		var form = document.getElementById('frm_newpropertyfeatures');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/properties/save_features',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#new_property_start_loader").hide();
				if(res.status == 'ERR'){
					$div_new_property_features_error.html(res.message);
					$div_new_property_features_success.fadeOut("fast");
					$div_new_property_features_error.fadeIn("fast");
					$('html, body').animate({ scrollTop: $('#div_new_property_features_error').offset().top-90 }, 'slow');
				}else if (res.status == 'SUCCESS'){
					window.location = "add_contacts";					
				}
           	},
			error: function(){
				$("#new_property_features_loader").hide();
				$div_new_property_features_error.html("Something went wrong. Please check your network and try again.");
				$div_new_property_features_success.fadeOut("fast");
				$div_new_property_features_error.fadeIn("fast");
				$('html, body').animate({ scrollTop: $('#div_new_property_features_error').offset().top-90 }, 'slow');
			}
       	});
	
	}
	return false;

}

function save_new_property_contacts(){
	$div_new_property_contacts_error = $("#div_new_property_contacts_error");
	$div_new_property_contacts_success = $("#div_new_property_contacts_success");
				
	$full_name = $("#full_name").val();
	$email_address = $("#email_address").val();
	$mobile_phone = $("#mobile_phone").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if ($full_name == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Full Name <br/>";}
	if ($email_address == ""){
		$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Email Address <br/>";
	}else if(!validateEmail($email_address)){
		$valmsg = $valmsg + "<i class='fa fa-exclamation'></i> Please enter the correct Email format <br/>";
	}
	if ($mobile_phone == ""){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please enter Mobile Phone <br/>";}
	
		
	if ($valmsg != $valmsg2){
		$div_new_property_contacts_error.html($valmsg);
		$div_new_property_contacts_success.fadeOut("fast");
		$div_new_property_contacts_error.fadeIn("fast");
		$('html, body').animate({ scrollTop: $('#div_new_property_contacts_error').offset().top-90 }, 'slow');
	}else{
		$div_new_property_contacts_error.fadeOut("fast");
		$div_new_property_contacts_success.fadeOut("fast");
				
		$("#new_property_contacts_loader").show();
					
		var form = document.getElementById('frm_newpropertycontacts');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/properties/save_contacts',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#new_property_contacts_loader").hide();
				if(res.status == 'ERR'){
					$div_new_property_contacts_error.html(res.message);
					$div_new_property_contacts_success.fadeOut("fast");
					$div_new_property_contacts_error.fadeIn("fast");
					$('html, body').animate({ scrollTop: $('#div_new_property_contacts_error').offset().top-90 }, 'slow');
				}else if (res.status == 'SUCCESS'){
					window.location = "add_attachments";					
				}
           	},
			error: function(){
				$("#new_property_contacts_loader").hide();
				$div_new_property_contacts_error.html("Something went wrong. Please check your network and try again.");
				$div_new_property_contacts_success.fadeOut("fast");
				$div_new_property_contacts_error.fadeIn("fast");
				$('html, body').animate({ scrollTop: $('#div_new_property_contacts_error').offset().top-90 }, 'slow');
			}
       	});
	
	}
	return false;

}


function save_new_property_attachments(){
	$div_new_property_attachments_error = $("#div_new_property_attachments_error");
	$div_new_property_attachments_success = $("#div_new_property_attachments_success");
				
	//$publish_status = $("#publish_status").val();
	//$featured = $("#featured").val();
	
	$valmsg = "";
	$valmsg2 = "";
		
	if (!$('input[name=publish_status]:checked').val()){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Publish Status <br/>";}
	if (!$('input[name=featured]:checked').val()){$valmsg = $valmsg + "<i class='fa fa-exclamation-circle'></i> Please select Featured <br/>";}
	
		
	if ($valmsg != $valmsg2){
		$div_new_property_attachments_error.html($valmsg);
		$div_new_property_attachments_success.fadeOut("fast");
		$div_new_property_attachments_error.fadeIn("fast");
		$('html, body').animate({ scrollTop: $('#div_new_property_attachments_error').offset().top-90 }, 'slow');
	}else{
		$div_new_property_attachments_error.fadeOut("fast");
		$div_new_property_attachments_success.fadeOut("fast");
				
		$("#new_property_attachments_loader").show();
					
		var form = document.getElementById('frm_newpropertyattachments');
		var formData = new FormData(form);

		$.ajax({
           	url: baseDir+'be/properties/save_attachments_and_publish',
           	type: 'POST',
           	data: formData,
			dataType: 'json',
           	xhr: function() {
           		var myXhr = $.ajaxSettings.xhr();
           		return myXhr;
           	},
           	cache: false,
           	contentType: false,
           	processData: false,
           	success: function (res) {
				$("#new_property_attachments_loader").hide();
				if(res.status == 'ERR'){
					$div_new_property_attachments_error.html(res.message);
					$div_new_property_attachments_success.fadeOut("fast");
					$div_new_property_attachments_error.fadeIn("fast");
					$('html, body').animate({ scrollTop: $('#div_new_property_attachments_error').offset().top-90 }, 'slow');
				}else if (res.status == 'SUCCESS'){
<<<<<<< HEAD
					window.location = "add_attachments";					
=======
					window.location = "add_start";					
>>>>>>> cb96254297f13994d0ea3950731f9198671fd21d
				}
           	},
			error: function(){
				$("#new_property_attachments_loader").hide();
				$div_new_property_attachments_error.html("Something went wrong. Please check your network and try again.");
				$div_new_property_attachments_success.fadeOut("fast");
				$div_new_property_attachments_error.fadeIn("fast");
				$('html, body').animate({ scrollTop: $('#div_new_property_attachments_error').offset().top-90 }, 'slow');
			}
       	});
	
	}
	return false;

}
