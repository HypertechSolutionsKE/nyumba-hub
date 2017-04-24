        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Properties List <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">System Users</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-office"></i> Properties List</h6>
                            <div class="panel-icons-group">
                                <a role="button" href="<?php echo base_url();?>be/properties/add_start" class="label btn-success"><i class="icon-plus-circle"></i> New Property</a>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div id="system_users_div">
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_system_user_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_system_user_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

                                <script type="text/javascript">
                                    //load_system_users();
                                </script>
                                <div class="datatable-tools">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Property Title</th>
                                                <th>Property SKU</th>
                                                <th>Listing Type</th>
                                                <th>Property Type</th>
                                                <th>Property Subcategory</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($properties as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->property_title; ?></td>
                                                    <td><?php echo $row->property_sku; ?></td>
                                                    <td><?php echo $row->listing_type_id; ?></td>
                                                    <td><?php echo $row->property_type_id; ?></td>
                                                    <td><?php echo $row->property_subcategory_id; ?></td>
                                                    <td><?php echo $row->price; ?></td>
                                                    <td>
                                                        <a role="button" href="" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Property Listing?');" href="javascript:delete_system_user(<?php echo $row->property_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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
            <div id="modal_add_systemuser" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New System User</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_addsystemuser" name="frm_addsystemuser" onsubmit="return save_system_user();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_add_system_user_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_add_system_user_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Profile Picture</label>
                                            <input type="file" class="styled form-control" id="add_profile_picture" name="profile_picture">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>First Name*</label>
                                            <input type="text" id="add_first_name" name="first_name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Last Name*</label>
                                            <input type="text" id="add_last_name" name="last_name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Phone</label>
                                            <input type="text" id="add_phone_number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Email Address*</label>
                                            <input type="text" id="add_email_address" name="email_address" class="form-control">
                                        </div>                                 
                                        <div class="col-sm-4">
                                            <label>Password*</label>
                                            <input type="password" id="add_user_password" name="user_password" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Confirm Password*</label>
                                            <input type="password" id="add_confirm_password" name="confirm_password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Gender</label>

                                            <select data-placeholder="Select Gender..." class="clear-results" tabindex="2" id="add_gender" name="gender">
                                                <option value=""></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>              
                                            </select> 
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Department</label>

                                            <select data-placeholder="Select Department..." class="clear-results" tabindex="2" id="add_department_id" name="department_id">
                                                <option value=""></option>
                                                <?php foreach($departments as $row): ?>
                                                    <option value="<?php echo $row->department_id; ?>"><?php echo $row->department_name; ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Access Level*</label>

                                            <select data-placeholder="Select Access Level..." class="clear-results" tabindex="2" id="add_access_level_id" name="access_level_id">
                                                <option value=""></option>
                                                <?php foreach($access_levels as $row): ?>
                                                    <option value="<?php echo $row->access_level_id; ?>"><?php echo $row->access_level_name; ?></option>
                                                <?php endforeach; ?>
               
                                            </select> 
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="add_system_user_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->
            <!-- Form modal -->
            <div id="modal_edit_systemuser" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-pencil"></i> Edit System User</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_editsystemuser" name="frm_editsystemuser" onsubmit="return update_system_user();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_edit_system_user_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                <input type="hidden" id="edit_user_id" name="user_id">
                                <div class="alert alert-success block-inner" style="display: none;" id="div_edit_system_user_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Profile Picture</label>
                                            <input type="file" class="styled form-control" id="edit_profile_picture" name="profile_picture">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>First Name*</label>
                                            <input type="text" id="edit_first_name" name="first_name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Last Name*</label>
                                            <input type="text" id="edit_last_name" name="last_name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Phone</label>
                                            <input type="text" id="edit_phone_number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <label>Email Address*</label>
                                            <input type="text" id="edit_email_address" name="email_address" class="form-control">
                                        </div>                                 
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Gender</label>

                                            <select data-placeholder="Select Gender..." class="clear-results" tabindex="2" id="edit_gender" name="gender">
                                                <option value=""></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>              
                                            </select> 
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Department</label>

                                            <select data-placeholder="Select Department..." class="clear-results" tabindex="2" id="edit_department_id" name="department_id">
                                                <option value=""></option>
                                                <?php foreach($departments as $row): ?>
                                                    <option value="<?php echo $row->department_id; ?>"><?php echo $row->department_name; ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Access Level*</label>

                                            <select data-placeholder="Select Access Level..." class="clear-results" tabindex="2" id="edit_access_level_id" name="access_level_id">
                                                <option value=""></option>
                                                <?php foreach($access_levels as $row): ?>
                                                    <option value="<?php echo $row->access_level_id; ?>"><?php echo $row->access_level_name; ?></option>
                                                <?php endforeach; ?>
               
                                            </select> 
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="edit_system_user_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
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
