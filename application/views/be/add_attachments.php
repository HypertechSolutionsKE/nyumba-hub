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
                                                        <input type="radio" name="publish_status" id="publish_status1" class="styled">
                                                        Online
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="publish_status" id="publish_status2" class="styled" checked="checked">
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
                                                        <input type="radio" name="featured" id="featured1" class="styled">
                                                            Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="featured" id="featured2" class="styled" checked="checked">
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



            <!-- Footer -->
            <div class="footer clearfix">
                <div class="pull-left">&copy; <?php echo date('Y');?>. NyumbaHub powered by <a href="http://hypertechsolutions.co.ke">Hypertech Solutions Limited</a></div>
            </div>
            <!-- /footer -->


        </div>
        <!-- /page content -->
