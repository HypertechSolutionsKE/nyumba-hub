        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Regions <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!--<div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Dashboard</a></li>
                    <li class="active">Regions</li>
                </ul>
            </div>-->

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-globe2"></i> Regions List</h6>
                            <div class="panel-icons-group">
                                <a data-toggle="modal" role="button" href="#modal_add_region" class="label btn-success" onclick="return region_add_clear();"><i class="icon-plus-circle"></i> Add Region</a>
                            </div>

                        </div>
                                <script type="text/javascript">
                                    //load_regions();
                                </script>

                        <div class="panel-body">
                            <div id="regions_div">
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_region_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_region_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

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
                                            <?php foreach ($regions as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->region_name; ?></td>
                                                    <td><?php echo $row->region_description; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" role="button" href="#modal_edit_region" onclick="return region_edit_load(<?php echo $row->region_id;?>);" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Region?');" href="javascript:delete_region(<?php echo $row->region_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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
            <div id="modal_add_region" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New Region</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_addregion" name="frm_addregion" onsubmit="return save_region();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_add_region_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_add_region_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Region Name*</label>
                                            <input type="text" id="add_region_name" name="region_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Region Description</label>
                                            <textarea class="form-control" name="region_description" id="add_region_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="add_region_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form modal -->
            <!-- Form modal -->
            <div id="modal_edit_region" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-pencil"></i> Edit Region</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form class="validate" method="post" role="form" id="frm_editregion" name="frm_editregion" onsubmit="return update_region();">

                            <div class="modal-body with-padding">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Update</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_edit_region_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_edit_region_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                <input type="hidden" id="edit_region_id" name="region_id" class="form-control">
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Region Name*</label>
                                            <input type="text" id="edit_region_name" name="region_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Region Description</label>
                                            <textarea class="form-control" name="region_description" id="edit_region_description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="edit_region_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
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


