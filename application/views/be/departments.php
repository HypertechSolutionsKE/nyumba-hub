		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Departments <small></small></h3>
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
               		<div class="panel panel-warning">
                 		<div class="panel-heading">
                        	<?php if (!isset($department)): ?>
                               	<h6 class="panel-title"><i class="icon-plus-circle"></i> New Department</h6>
                            <?php else: ?>
                               	<h6 class="panel-title"><i class="icon-pencil"></i> Edit Department</h6>
                                <a href="<?php echo base_url();?>be/departments" class="pull-right label btn-success"><i class="icon-plus-circle"></i></a>                               
                            <?php endif; ?>
                        </div>
                    	<div class="panel-body">  
                			<?php if (!isset($department)): ?>
                        		<form class="form-horizontal departments-form" action="<?php echo base_url();?>be/departments/save" method="post" role="form">
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
                                        <label class="col-sm-3 control-label">Department Name: <span class="mandatory">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" class="required form-control" name="department_name" id="department_name" value="<?php echo set_value('department_name'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Description:</label>
                                        <div class="col-sm-6">
                                        	<textarea class="form-control" name="department_description" id="department_description"><?php echo set_value('department_description'); ?></textarea>
                                        </div>
                                    </div>
                                    
                                     <div class="form-actions col-sm-9 text-right">
                                     		<button type="submit" class="btn btn-success"><i class="icon-disk"></i> Save</button>
                                    </div>
                        		</form>
                    		<?php else: ?>
                    			<?php foreach ($department as $row): ?>
                                    <form class="form-horizontal departments-form" action="<?php echo base_url();?>be/departments/update/<?php echo $row->department_id;?>" method="post" role="form">
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
                                            <label class="col-sm-3 control-label">Department Name: <span class="mandatory">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="required form-control" name="department_name" id="department_name" value="<?php echo $row->department_name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description:</label>
                                            <div class="col-sm-6">
                                        		<textarea class="form-control" name="department_description" id="department_description"><?php echo $row->department_description; ?></textarea>
                                            </div>
                                        </div>
                                        
                                         <div class="form-actions col-sm-9 text-right">
                                     		<button type="submit" class="btn btn-info"><i class="icon-disk"></i> Update</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>
                    		<?php endif; ?>
              			</div>
                 	
                    	<div class="panel-heading"><h6 class="panel-title"><i class="icon-list2"></i> Departments List</h6></div>
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
                                        <?php foreach ($departments as $row): ?>
                                            <tr>
                                                <td><?php echo $row->department_name; ?></td>
                                                <td><?php echo $row->department_description; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>be/departments/edit/<?php echo $row->department_id; ?>" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                    <a onClick="javascript:return confirm('Do you really wish to delete this Department?');" href="<?php echo base_url();?>be/departments/delete/<?php echo $row->department_id; ?>" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
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

	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2016. Euro Golden Bet powered by <a href="http://hypertechsolutions.co.ke">Hypertech Solutions Limited</a></div>
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->
