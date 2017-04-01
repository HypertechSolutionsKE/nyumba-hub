
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
//LOAD LISTING TYPES
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







