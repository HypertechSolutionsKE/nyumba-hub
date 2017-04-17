        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h6>&nbsp;</h6>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">Currencies</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-9">
                        <form class="validate" method="post" role="form" id="frm_newpropertystart" name="frm_newpropertystart" onsubmit="return save_new_property_start();" enctype="multipart/form-data">

                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 class="panel-title" style="margin-top: 5px"><i class="icon-office"></i> New Property</h6>
                                </div>
                                <div class="panel-body">
                                    <div class="block-inner text-danger">
                                        <h6 class="heading-hr">Step 1: Basic information <small class="display-block">Please fill in the property's basic information and click 'Next'</small></h6>
                                    </div>

                                    <div class="alert alert-danger block-inner" style="display: none;" id="div_new_property_start_error">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                    </div>
                                        
                                    <div class="alert alert-success block-inner" style="display: none;" id="div_new_property_start_success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Listing Type *</label>
                                                <select data-placeholder="Select Listing Type..." class="clear-results" tabindex="2" id="listing_type_id" name="listing_type_id">
                                                    <option value=""></option> 
                                                    <?php foreach($listing_types as $row): ?>
                                                        <option value="<?php echo $row->listing_type_id; ?>"><?php echo $row->listing_type_name; ?></option>
                                                    <?php endforeach; ?>                       
                                                </select> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Property Title *</label>
                                                <input type="text" id="property_title" name="property_title" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Property Type *</label>
                                                <select data-placeholder="Select Property Type..." class="clear-results" tabindex="2" id="property_type_id" name="property_type_id">
                                                    <option value=""></option> 
                                                    <?php foreach($property_types as $row): ?>
                                                        <option value="<?php echo $row->property_type_id; ?>"><?php echo $row->property_type_name; ?></option>
                                                    <?php endforeach; ?>                       
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Property Subcategory *</label>
                                                <select data-placeholder="Select Subcategory..." class="clear-results" tabindex="2" id="property_subcategory_id" name="property_subcategory_id">
                                                    <option value=""></option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <h4 style="margin-top: 0; margin-bottom: 10px">Pick Location</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Region *</label>
                                                <select data-placeholder="Select Region..." class="clear-results" tabindex="2" id="region_id" name="region_id">
                                                    <option value=""></option>
                                                    <?php foreach($regions as $row): ?>
                                                        <option value="<?php echo $row->region_id; ?>"><?php echo $row->region_name; ?></option>
                                                    <?php endforeach; ?>                       

                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>City/Town *</label>
                                                <select data-placeholder="Select City/Town..." class="clear-results" tabindex="2" id="city_id" name="city_id">
                                                    <option value=""></option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Area/Locality *</label>
                                                <select data-placeholder="Select Area/Locality..." class="clear-results" tabindex="2" id="area_id" name="area_id">
                                                    <option value=""></option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Address (Street, Number etc) *</label>
                                                <input type="text" id="physical_address" name="physical_address" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <h6>Map Position</h6>
                                            </div>                                       
                                            <div class="col-sm-8">
                                                <div class="col-sm-6">
                                                    <label>Longitude</label>
                                                    <input type="text" id="longitude" name="longitude" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Latitude</label>
                                                    <input type="text" id="latitude" name="latitude" class="form-control">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <h4 style="margin-top: 0; margin-bottom: 10px">Pricing</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Price *</label>
                                                <input type="text" id="price" name="price" class="form-control"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label>Currency</label>
                                                <select data-placeholder="Select Currency..." class="clear-results" tabindex="2" id="currency_id" name="currency_id">
                                                    <option value=""></option>
                                                    <?php foreach($currencies as $row): ?>
                                                        <option value="<?php echo $row->currency_id; ?>"><?php echo $row->currency_name; ?></option>
                                                    <?php endforeach; ?>                       

                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="pull-left" id="new_property_start_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                    <button type="submit" class="btn btn-success"><i class="icon-arrow-right11"></i> Save &amp; Continue with Next Step</button>
                                </div>

                             </div>                           
                        </form>
                </div>
            </div>



            <!-- Footer -->
            <div class="footer clearfix">
                <div class="pull-left">&copy; <?php echo date('Y');?>. NyumbaHub powered by <a href="http://hypertechsolutions.co.ke">Hypertech Solutions Limited</a></div>
            </div>
            <!-- /footer -->


        </div>
        <!-- /page content -->
