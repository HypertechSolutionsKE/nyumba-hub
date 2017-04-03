        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Areas <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">Areas</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-bookmarks"></i> Areas List</h6>
                            <div class="panel-icons-group">
                                <a data-toggle="modal" role="button" href="#modal_add_area" class="label btn-success" onclick="return area_add_clear();"><i class="icon-plus-circle"></i> Add Area</a>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div id="Areas_div">
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_area_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_area_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

                                <script type="text/javascript">
                                    //load_Areas();
                                </script>
                                <div class="datatable-tools">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>City/Town</th>                                          
                                                <th>Region</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($areas as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->area_name; ?></td>
                                                    <td><?php echo $row->area_description; ?></td>
                                                    <td><?php echo $row->city_name; ?></td>         
                                                    <td><?php echo $row->region_name; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" role="button" href="#modal_edit_area" onclick="return area_edit_load(<?php echo $row->area_id;?>);" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Area?');" href="javascript:delete_area(<?php echo $row->area_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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
            <div id="modal_add_area" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New Area/Locality</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_addarea" name="frm_addarea" onsubmit="return save_area();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_add_area_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_add_area_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Region*</label>
                                            <select data-placeholder="Select a Region..." class="clear-results" tabindex="2" id="add_area_region_id" name="region_id">
                                                <option value=""></option>
                                                <?php foreach($regions as $row): ?>
                                                    <option value="<?php echo $row->region_id; ?>"><?php echo $row->region_name; ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City/Town*</label>
                                            <select data-placeholder="Select a City/Town..." class="clear-results" tabindex="2" id="add_area_city_id" name="city_id">
                                                <option value=""></option>
                                                <!--<?php foreach($cities as $row): ?>
                                                    <option value="<?php echo $row->city_id; ?>"><?php echo $row->city_name; ?></option>
                                                <?php endforeach; ?>-->
                                            </select> 
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Area Name*</label>
                                            <input type="text" id="add_area_name" name="area_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Area Description</label>
                                            <textarea class="form-control" name="area_description" id="add_area_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="add_area_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->
            <!-- Form modal -->
            <div id="modal_edit_area" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-pencil"></i> Edit Area/Locality</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_edita,rea" name="frm_editarea" onsubmit="return update_area();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Update</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_edit_area_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_edit_area_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                <input type="hidden" id="edit_area_id" name="area_id" class="form-control">
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Region*</label>
                                            <select data-placeholder="Select a Region..." class="clear-results" tabindex="2" id="edit_area_region_id" name="region_id">
                                                <option value=""></option>
                                                <?php foreach($regions as $row): ?>
                                                    <option value="<?php echo $row->region_id; ?>"><?php echo $row->region_name; ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City/Town*</label>
                                            <select data-placeholder="Select a City/Town..." class="clear-results" tabindex="2" id="edit_area_city_id" name="city_id">
                                                <option value=""></option>
                                                <!--<?php foreach($cities as $row): ?>
                                                    <option value="<?php echo $row->city_id; ?>"><?php echo $row->city_name; ?></option>
                                                <?php endforeach; ?>-->
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                 

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Area Name*</label>
                                            <input type="text" id="edit_area_name" name="area_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Area Description</label>
                                            <textarea class="form-control" name="area_description" id="edit_area_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="edit_area_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
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
