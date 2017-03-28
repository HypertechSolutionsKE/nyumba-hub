        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Listing Types <small></small></h3>
                </div>
            </div>
            <!-- /page header -->


            <!-- Breadcrumbs line --
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>be">Home</a></li>
                    <li class="active">departments</li>
                </ul>
            </div>
            <!-- /breadcrumbs line -->

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-danger">
                        <!--<div class="panel-heading">
                            <?php if (!isset($listing_type)): ?>
                                <h6 class="panel-title"><i class="icon-plus-circle"></i> New Listing Type</h6>
                            <?php else: ?>
                                <h6 class="panel-title"><i class="icon-pencil"></i> Edit Listing Type</h6>
                                <a href="<?php echo base_url();?>be/listing_types" class="pull-right label btn-success"><i class="icon-plus-circle"></i></a>                               
                            <?php endif; ?>
                        </div>
                        <div class="panel-body">  
                            <?php if (!isset($listing_type)): ?>
                                <form class="form-horizontal listing-types-form" action="<?php echo base_url();?>be/listing_types/save" method="post" role="form">
                                    <?php if (isset($error)): ?>
                                        <div class="alert alert-danger block-inner">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <?php echo $error; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($success)): ?>
                                        <div class="alert alert-success block-inner">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <?php echo $success; ?>
                                        </div>
                                    <?php endif; ?>
                
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Listing Type Name: <span class="mandatory">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="required form-control" name="listing_type_name" id="listing_type_name" value="<?php echo set_value('listing_type_name'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Description:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="listing_type_description" id="listing_type_description"><?php echo set_value('listing_type_description'); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">                           
                                         <div class="form-actions col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                        </div>
                                    </div>
                                </form>
                            <?php else: ?>
                                <?php foreach ($listing_types as $row): ?>
                                    <form class="form-horizontal listing-types-form" action="<?php echo base_url();?>be/listing_types/update/<?php echo $row->listing_type_id;?>" method="post" role="form">
                                        <?php if (isset($error)): ?>
                                            <div class="alert alert-danger block-inner">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <?php echo $error; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (isset($success)): ?>
                                            <div class="alert alert-success block-inner">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <?php echo $success; ?>
                                            </div>
                                        <?php endif; ?>
                    
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Listing Type Name: <span class="mandatory">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="required form-control" name="listing_type_name" id="listing_type_name" value="<?php echo $row->listing_type_name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description:</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="listing_type_description" id="listing_type_description"><?php echo $row->listing_type_description; ?></textarea>
                                            </div>
                                        </div>
                                        
                                         <div class="form-actions col-sm-9 text-right">
                                            <button type="submit" class="btn btn-info"><i class="icon-disk"></i> Update</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>-->
                    
                        <div class="panel-heading">
                            <h6 class="panel-title" style="margin-top: 5px"><i class="icon-list2"></i> Listing Types List</h6>
                            <div class="panel-icons-group">
                                <a data-toggle="modal" role="button" href="#form_modal" class="label btn-success"><i class="icon-plus-circle"></i> Add Listing Type</a>
                            </div>

                        </div>
                        <div class="panel-body"> 
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
                                        <?php foreach ($listing_types as $row): ?>
                                            <tr>
                                                <td><?php echo $row->listing_type_name; ?></td>
                                                <td><?php echo $row->listing_type_description; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>be/listing_types/edit/<?php echo $row->listing_type_id; ?>" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                    <a onClick="javascript:return confirm('Do you really wish to delete this Listing Type?');" href="<?php echo base_url();?>be/listing_types/delete/<?php echo $row->listing_type_id; ?>" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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

           <!-- Form modal -->
            <div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="icon-plus-circle"></i> New Listing Type</h4>
                        </div>

                        <!-- Form inside modal -->
                        <form action="#" role="form">

                            <div class="modal-body with-padding">
                                <!--<div class="block-inner text-danger">
                                    <h6 class="heading-hr">Step 1: Your shipping information <small class="display-block">Please enter your shipping info</small></h6>
                                </div>-->

                                 <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <label>Listing Type Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label">Listing Type Description</label>
                                        <textarea class="form-control" name="listing_type_description" id="listing_type_description"><?php echo set_value('listing_type_description'); ?></textarea>
                                    </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
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
