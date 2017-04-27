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
            <?php if (!isset($property)): ?>
                <div class="row">
                    <div class="col-md-9">
                        <form class="validate" method="post" role="form" id="frm_newpropertyattachments" name="frm_newpropertyattachments" onsubmit="return save_new_property_attachments();" enctype="multipart/form-data">

                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h6 class="panel-title" style="margin-top: 5px"><i class="icon-office"></i> New Property</h6>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/add_start">Step 1: Basic Info</a></li>
                                        <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/add_features">Step 2: Property Features</a></li>
                                        <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/add_contacts">Step 3: Contact Details</a></li>
                                        <li class="active"  ><a href="<?php echo base_url();?>be/properties/add_attachments">Step 4: Attachments &amp; Publish</a></li>                                        
                                    </ul>
                                    <div class="clearfix"></div>
                                    <hr>

                                    <!--<div class="block-inner text-danger">
                                        <h6 class="heading-hr">Step 2: Property Features <small class="display-block">Please fill in the property features and click 'Next'</small></h6>
                                    </div>-->

                                    <div class="alert alert-danger fade in block-inner" style="display: none;" id="div_new_property_attachments_error">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                    </div>
                                    
                                    <div class="alert alert-success block-inner" style="display: none;" id="div_new_property_attachments_success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Main Image *&nbsp;&nbsp;<a data-placement="top" class="tip" title="Click here to browse for your property's main image."><i class="icon-question2"></i></a></label>
                                                <input type="file" id="main_image" name="main_image" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Other Images</label>
                                                <input type="file" id="other_image_1" name="other_image_1" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <input type="file" id="other_image_2" name="other_image_2" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <input type="file" id="other_image_3" name="other_image_3" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <input type="file" id="other_image_4" name="other_image_4" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <input type="file" id="other_image_5" name="other_image_5" class="styled">
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Publish Status *&nbsp;&nbsp;<a data-placement="top" class="tip" title="Click here to browse for your property's main image."><i class="icon-question2"></i></a></label>
                                                
                                                <div class="block-inner">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="publish_status" id="publish_status1" class="styled" value="Online">
                                                        Online
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="publish_status" id="publish_status2" class="styled" checked="checked" value="Offline">
                                                        Offline
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <label>Featured *&nbsp;&nbsp;<a data-placement="top" class="tip" title="Click here to browse for your property's main image."><i class="icon-question2"></i></a></label>
                                                
                                                <div class="block-inner">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="featured" id="featured1" class="styled" value="Yes">
                                                            Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="featured" id="featured2" class="styled" checked="checked" value="No">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <div class="pull-left" id="new_property_attachments_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                        <button type="submit" class="btn btn-success"><i class="icon-arrow-right11"></i> Save &amp; and Publish</button>

                                </div>

                             </div>                           
                        </form>
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($property as $row2): ?>
                    <div class="row">
                        <div class="col-md-9">
                            <form class="validate" method="post" role="form" id="frm_newpropertyattachments" name="frm_newpropertyattachments" onsubmit="return update_property_attachments();" enctype="multipart/form-data">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h6 class="panel-title" style="margin-top: 5px"><i class="icon-office"></i> Edit Property</h6>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/edit_start/<?php echo $row2->property_id; ?>">Step 1: Basic Info</a></li>
                                            <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/edit_features/<?php echo $row2->property_id; ?>">Step 2: Property Features</a></li>
                                            <li class="bg-succ"><a href="<?php echo base_url();?>be/properties/edit_contacts/<?php echo $row2->property_id; ?>">Step 3: Contact Details</a></li>
                                            <li class="active"  ><a href="<?php echo base_url();?>be/properties/edit_attachments/<?php echo $row2->property_id; ?>">Step 4: Attachments &amp; Publish</a></li>                                        
                                        </ul>
                                        <div class="clearfix"></div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="block">
                                                    <div class="thumbnail thumbnail-boxed">
                                                        <?php if($row2->main_image != ''): ?>
                                                            <?php if (file_exists("./uploads/property_images/" . $row2->main_image)): ?>
                                                                <a href="<?php echo base_url(); ?>uploads/property_images/<?php echo $row2->main_image; ?>" class="thumb-zoom lightbox" title="<?php echo $row2->property_title;?>">
                                                                    <img src="<?php echo base_url(); ?>uploads/property_images/<?php echo $row2->main_image; ?>" alt="">
                                                                </a>
                                                                <div class="caption text-center">
                                                                    <h6>Main Image</h6>
                                                                    <div class="caption text-center">
                                                                        <h6><a data-toggle="modal" role="button" href="#modal_main_image" class="badge btn-info"><i class="icon-pencil"></i> Change Image</a></h6>
                                                                    </div>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="caption text-center">
                                                                    <h6>Main Image</h6>
                                                                    <div class="caption text-center">
                                                                        <h6><a data-toggle="modal" role="button" href="#modal_main_image" class="badge btn-success"><i class="icon-plus"></i> Add Image</a></h6>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <div class="caption text-center">
                                                                <h6>Main Image</h6>
                                                                <div class="caption text-center">
                                                                    <h6><a data-toggle="modal" role="button" href="#modal_main_image" class="badge btn-success"><i class="icon-plus"></i> Add Image</a></h6>
                                                                    </div>
                                                            </div>
                                                        <?php endif; ?>                                  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">                                                 
                                            <?php for ($ji = 1; $ji <= 5; $ji++): ?>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="block">
                                                        <div class="thumbnail thumbnail-boxed"> 
                                                            <?php $other_image = 'other_image_' . $ji; ?>        
                                                            <?php if($row2->$other_image != ''): ?>
                                                                <?php if (file_exists("./uploads/property_images/" . $row2->$other_image)): ?>
                                                                    <a href="<?php echo base_url(); ?>uploads/property_images/<?php echo $row2->$other_image; ?>" class="thumb-zoom lightbox" title="<?php echo $row2->property_title;?>">
                                                                        <img src="<?php echo base_url(); ?>uploads/property_images/<?php echo $row2->$other_image; ?>" alt="">
                                                                    </a>
                                                                    <div class="caption text-center">
                                                                        <h6>Other Image <?php echo $ji; ?></h6>
                                                                        <div class="caption text-center">
                                                                            <h6><a data-toggle="modal" role="button" href="#modal_other_image_<?php echo $ji; ?>" class="badge btn-info"><i class="icon-pencil"></i> Change Image</a></h6>
                                                                        </div>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div class="caption text-center">
                                                                        <h6>Other Image <?php echo $ji; ?></h6>
                                                                        <div class="caption text-center">
                                                                            <h6><a data-toggle="modal" role="button" href="#modal_other_image_<?php echo $ji; ?>" class="badge btn-success"><i class="icon-plus"></i> Add Image</a></h6>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <div class="caption text-center">
                                                                    <h6>Other Image <?php echo $ji; ?></h6>
                                                                    <div class="caption text-center">
                                                                        <h6><a data-toggle="modal" role="button" href="#modal_other_image_<?php echo $ji; ?>" class="badge btn-success"><i class="icon-plus"></i> Add Image</a></h6>
                                                                        </div>
                                                                </div>
                                                            <?php endif; ?>                                  
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($ji == 4): ?>
                                                    <div class="clearfix"></div>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>

                                        <div class="alert alert-danger fade in block-inner" style="display: none;" id="div_new_property_attachments_error">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Error
                                        </div>
                                        
                                        <div class="alert alert-success block-inner" style="display: none;" id="div_new_property_attachments_success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Error
                                        </div>
                                        <input type="hidden" name="property_id" id="property_id" value="<?php echo $row2->property_id; ?>">                                        
                                        <hr>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <label>Publish Status *&nbsp;&nbsp;<a data-placement="top" class="tip" title="Click here to browse for your property's main image."><i class="icon-question2"></i></a></label>
                                                    
                                                    <div class="block-inner">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="publish_status" id="publish_status1" class="styled" value="Online" <?php if($row2->publish_status == 'Online'){echo 'checked';} ?>> 
                                                            Online
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="publish_status" id="publish_status2" class="styled" value="Offline" <?php if($row2->publish_status == 'Offline'){echo 'checked';} ?>>
                                                            Offline
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <label>Featured *&nbsp;&nbsp;<a data-placement="top" class="tip" title="Click here to browse for your property's main image."><i class="icon-question2"></i></a></label>
                                                    
                                                    <div class="block-inner">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="featured" id="featured1" class="styled" value="Yes" <?php if($row2->featured == 'Yes'){echo 'checked';} ?>>
                                                                Yes
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="featured" id="featured2" class="styled" value="No" <?php if($row2->featured == 'No'){echo 'checked';} ?>>
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <div class="pull-left" id="new_property_attachments_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                            <button type="submit" class="btn btn-success"><i class="icon-arrow-right11"></i> Save &amp; and Complete</button>

                                    </div>

                                 </div>                           
                            </form>
                        </div>
                    </div>


                    <!-- Form modal -->
                    <div id="modal_main_image" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><i class="icon-image"></i> Upload Property Main Image</h4>
                                </div>

                                <!-- Form inside modal -->
                                <form class="validate" method="post" role="form" id="frm_propertymainimage" name="frm_propertymainimage" onsubmit="return upload_property_main_image();">

                                    <div class="modal-body with-padding">
                                        <div class="block-inner text-danger">
                                            <h6 class="heading-hr"> <small class="display-block">Browse for the image then click Upload</small></h6>
                                        </div>

                                        <div class="alert alert-danger block-inner" style="display: none;" id="div_property_main_image_error">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                Error
                                        </div>
                                        <div class="alert alert-success block-inner" style="display: none;" id="div_property_main_image_success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                Error
                                        </div>
                                        <input type="hidden" id="property_main_image_id" name="property_main_image_id" value="<?php echo $row2->property_id; ?>">
                                                
                                         <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label>Main Image</label>
                                                    <input type="file" class="styled form-control" id="property_main_image" name="property_main_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="pull-left" id="property_main_image_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                        <button type="submit" class="btn btn-success"><i class="icon-upload2"></i> Upload</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /form modal -->

                    <?php for ($ji = 1; $ji <= 5; $ji++): ?>
                        <!-- Form modal -->
                        <div id="modal_other_image_<?php echo $ji; ?>" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"><i class="icon-image"></i> Upload Property Other Image <?php echo $ji; ?></h4>
                                    </div>

                                    <!-- Form inside modal -->
                                    <form class="validate" method="post" role="form" id="frm_propertyotherimage<?php echo $ji; ?>" name="frm_propertyotherimage<?php echo $ji; ?>" onsubmit="return upload_property_other_image(<?php echo $ji; ?>);">

                                        <div class="modal-body with-padding">
                                            <div class="block-inner text-danger">
                                                <h6 class="heading-hr"> <small class="display-block">Browse for the image then click Upload</small></h6>
                                            </div>

                                            <div class="alert alert-danger block-inner" style="display: none;" id="div_property_other_image_<?php echo $ji; ?>_error">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    Error
                                            </div>
                                            <div class="alert alert-success block-inner" style="display: none;" id="div_property_other_image_<?php echo $ji; ?>_success">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                    Error
                                            </div>
                                            <input type="hidden" id="property_other_image_<?php echo $ji; ?>_id" name="property_other_image_<?php echo $ji; ?>_id" value="<?php echo $row2->property_id; ?>">
                                                    
                                             <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Main Image</label>
                                                        <input type="file" class="styled form-control" id="property_other_image_<?php echo $ji; ?>" name="property_other_image_<?php echo $ji; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="pull-left" id="property_other_image_<?php echo $ji; ?>_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                            <button type="submit" class="btn btn-success"><i class="icon-upload2"></i> Upload</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /form modal -->
                    <?php endfor; ?>
                <?php endforeach; ?>
            <?php endif; ?>



            <!-- Footer -->
            <div class="footer clearfix">
                <div class="pull-left">&copy; <?php echo date('Y');?>. NyumbaHub powered by <a href="http://hypertechsolutions.co.ke">Hypertech Solutions Limited</a></div>
            </div>
            <!-- /footer -->


        </div>
        <!-- /page content -->
