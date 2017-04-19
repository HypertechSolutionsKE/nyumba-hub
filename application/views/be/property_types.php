        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Property Types <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">Property Types</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-library"></i> Property Types List</h6>
                            <div class="panel-icons-group">
                                <a data-toggle="modal" role="button" href="#modal_add_propertytype" class="label btn-success" onclick="return property_type_add_clear();"><i class="icon-plus-circle"></i> Add Property Type</a>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div id="property_types_div">
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_property_type_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_property_type_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

                                <script type="text/javascript">
                                    //load_property_types();
                                </script>
                                <div class="datatable-tools">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($property_types as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->property_type_name; ?></td>
                                                    <td><?php echo $row->property_type_description; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" role="button" href="#modal_edit_propertytype" onclick="return property_type_edit_load(<?php echo $row->property_type_id;?>);" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Property Type?');" href="javascript:delete_property_type(<?php echo $row->property_type_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                

                            </div>
                        </div> 
                    </div>                           
                </div>
            </div>

            <!-- Form modal -->
            <div id="modal_add_propertytype" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New Property Type</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_addpropertytype" name="frm_addpropertytype" onsubmit="return save_property_type();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_add_property_type_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_add_property_type_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Property Type Name*</label>
                                            <input type="text" id="add_property_type_name" name="property_type_name" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Property Type Description</label>
                                            <textarea class="form-control" name="property_type_description" id="add_property_type_description"></textarea>
                                        </div>

                                    </div>
                                </div>

                                <!--<div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Property Type Features</label>

                                            <?php foreach ($property_feature_types as $row): ?>
                                                <p class="text-danger" style="font-weight: bold;"><?php echo $row->property_feature_type_name; ?></p>
                                                <div class="block-inner">
                                                    <?php foreach ($property_features as $row2): ?>
                                                        <?php if ($row->property_feature_type_id == $row2->property_feature_type_id): ?>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" class="" name="bedrooms" id=""><?php echo $row2->property_feature_name; ?>
                                                            </label>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>                    
                                                </div>
                                                <div class="clearfix"></div>
                                            <?php endforeach; ?>                                    

                                        </div>
                                    </div>
                                </div>-->


                                <div class="form-group" style="margin-bottom: -10px !important;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Other Features <small>(Please check at least one)</small>: </label>
                                            <div class="block-inner">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="bedrooms" id="add_bedrooms">Bedrooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="bathrooms" id="add_bathrooms">Bathrooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="total_rooms" id="add_total_rooms">Total Rooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="living_area" id="add_living_area">Living Area
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="floor" id="add_floor">Floor
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="total_floors" id="add_total_floors">Total Floors
                                                </label>                                            
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="land_size" id="add_land_size">Land Size
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="building_size" id="add_building_size">Building Size
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="add_property_type_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->
            <!-- Form modal -->
            <div id="modal_edit_propertytype" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-pencil"></i> Edit Property Type</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_editpropertytype" name="frm_editpropertytype" onsubmit="return update_property_type();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Update</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_edit_property_type_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_edit_property_type_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                <input type="hidden" id="edit_property_type_id" name="property_type_id" class="form-control">
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Property Type Name*</label>
                                            <input type="text" id="edit_property_type_name" name="property_type_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Property Type Description</label>
                                            <textarea class="form-control" name="property_type_description" id="edit_property_type_description"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Property Type Features <small>(Please check at least one)</small>: </label>
                                            <div class="block-inner">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="bedrooms" id="edit_bedrooms">Bedrooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="bathrooms" id="edit_bathrooms">Bathrooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="total_rooms" id="edit_total_rooms">Total Rooms
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="living_area" id="edit_living_area">Living Area
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="floor" id="edit_floor">Floor
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="total_floors" id="edit_total_floors">Total Floors
                                                </label>                                            
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="land_size" id="edit_land_size">Land Size
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="" name="building_size" id="edit_building_size">Building Size
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="edit_property_type_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Update</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->


            <!-- Footer -->
            <div class="footer clearfix">
                <div class="pull-left">&copy; <?php echo date('Y');?>. NyumbaHub powered by <a href="http://hypertechsolutions.co.ke">Hypertech Solutions Limited</a></div>
            </div>
            <!-- /footer -->


        </div>
        <!-- /page content -->
