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
                    <!-- Form inside modal -->
                    <form class="form-horizontal" method="post" role="form" id="frm_companyinformation" name="frm_companyinformation" onsubmit="return save_company_information();" enctype="">

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h6 class="panel-title" style="margin-top: 5px"><i class="icon-info"></i> Company Information</h6>
                            </div>
                            <div class="panel-body">
                                <div class="block-inner text-danger">
                                    <h6 class="heading-hr"> <small class="display-block">Please fill in the required information and click Save</small></h6>
                                </div>

                                <div class="alert alert-danger block-inner" style="display: none;" id="div_company_information_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    Error
                                </div>
                                    
                                <div class="alert alert-success block-inner" style="display: none;" id="div_company_information_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    Error
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Company Name*</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Phone*</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Mobile</label>
                                            <input type="text" id="mobile_number" name="mobile_number" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Company Tagline</label>
                                            <textarea class="form-control" name="company_tagline" id="company_tagline"></textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Email</label>
                                            <input type="text" id="email_address" name="email_address" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Website</label>
                                            <input type="text" id="website" name="website" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Fax No.</label>
                                            <input type="text" id="fax_number" name="fax_number" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Postal Address</label>
                                            <input type="text" id="postal_address" name="postal_address" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>ZIP Code</label>
                                            <input type="text" id="zip_code" name="zip_code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>City</label>
                                            <input type="text" id="city" name="city" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Country</label>
                                            <input type="text" id="country" name="country" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>PIN No</label>
                                            <input type="text" id="pin_number" name="pin_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>VAT No</label>
                                            <input type="text" id="vat_number" name="vat_number" class="form-control">
                                        </div>
                                        <div class="col-sm-8">
                                            <label>Company Logo</label>
                                            <input type="file" id="company_logo" name="company_logo" class="form-control">
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="modal-footer">
                                <div class="pull-left" id="company_information_loader" style="display: none;"><i class="icon-spinner3 spin block-inner"></i></div>
                                <button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-close"></i> Close</button>

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
