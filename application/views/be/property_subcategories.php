        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Property Subcategories <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">Property Subcategories</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-grid2"></i> Property Subcategories List</h6>
                            <div class="panel-icons-group">
                                <a data-toggle="modal" role="button" href="#modal_add_propertysubcategory" class="label btn-success" onclick="return property_subcategory_add_clear();"><i class="icon-plus-circle"></i> Add Property Subcategory</a>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div id="property_subcategories_div">
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_property_subcategory_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_property_subcategory_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

                                <script type="text/javascript">
                                    //load_property_subcategories();
                                </script>
                                <div class="datatable-tools">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Property Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($property_subcategories as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->property_subcategory_name; ?></td>
                                                    <td><?php echo $row->property_subcategory_description; ?></td>
                                                    <td><?php echo $row->property_type_name; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" role="button" href="#modal_edit_propertysubcategory" onclick="return property_subcategory_edit_load(<?php echo $row->property_subcategory_id;?>);" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Property Subcategory?');" href="javascript:delete_property_subcategory(<?php echo $row->property_subcategory_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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
            <div id="modal_add_propertysubcategory" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New Property Subcategory</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_addpropertysubcategory" name="frm_addpropertysubcategory" onsubmit="return save_property_subcategory();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_add_property_subcategory_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_add_property_subcategory_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Property Type*</label>
                                            <select data-placeholder="Choose a Property Type..." class="clear-results" tabindex="2" id="add_property_type_id" name="property_type_id">
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
                                        <div class="col-sm-12">
                                            <label>Property Subcategory Name*</label>
                                            <input type="text" id="add_property_subcategory_name" name="property_subcategory_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Property Subcategory Description</label>
                                            <textarea class="form-control" name="property_subcategory_description" id="add_property_subcategory_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="add_property_subcategory_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->
            <!-- Form modal -->
            <div id="modal_edit_propertysubcategory" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-pencil"></i> Edit Property Subcategory</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_editpropertysubcategory" name="frm_editpropertysubcategory" onsubmit="return update_property_subcategory();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Update</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_edit_property_subcategory_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_edit_property_subcategory_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                <input type="hidden" id="edit_property_subcategory_id" name="property_subcategory_id" class="form-control">
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Property Type*</label>
                                            <select data-placeholder="Choose a Property Type..." class="clear-results" tabindex="2" id="edit_property_type_id" name="property_type_id">
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
                                        <div class="col-sm-12">
                                            <label>Property Subcategory Name*</label>
                                            <input type="text" id="edit_property_subcategory_name" name="property_subcategory_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Property Subcategory Description</label>
                                            <textarea class="form-control" name="property_subcategory_description" id="edit_property_subcategory_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="edit_property_subcategory_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
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
