        <link href="<?php echo base_url();?>assets/be/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/be/css/londinium-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/be/css/styles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/be/css/icons.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/select2.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/application.js"></script>
                                        
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
