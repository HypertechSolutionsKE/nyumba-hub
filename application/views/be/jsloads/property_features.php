                                <script type="text/javascript">

                                    $.extend( $.fn.dataTable.defaults, {
                                        autoWidth: false,
                                        pagingType: 'full_numbers',
                                        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                                        language: {
                                            search: '<span>Filter:</span> _INPUT_',
                                            lengthMenu: '<span>Show:</span> _MENU_',
                                            paginate: { 'first': 'First', 'last': 'Last', 'next': '>', 'previous': '<' }
                                        }
                                    });

                                    //===== Default datatable =====//

                                    $('.datatable table').dataTable();


                                    $('.datatable-tools table').dataTable({
                                        dom: '<"datatable-header"Tfl>t<"datatable-footer"ip>',
                                        tableTools: {
                                            sRowSelect: "single",
                                            sSwfPath: "media/swf/copy_csv_xls_pdf.swf",
                                            aButtons: [
                                                {
                                                    sExtends:    'copy',
                                                    sButtonText: 'Copy',
                                                    sButtonClass: 'btn btn-default'
                                                },
                                                {
                                                    sExtends:    'print',
                                                    sButtonText: 'Print',
                                                    sButtonClass: 'btn btn-default'
                                                },
                                                {
                                                    sExtends:    'collection',
                                                    sButtonText: 'Save <span class="caret"></span>',
                                                    sButtonClass: 'btn btn-primary',
                                                    aButtons:    [ 'csv', 'xls', 'pdf' ]
                                                }
                                            ]
                                        }
                                    });

                                    $(".dataTables_length select").select2({
                                        minimumResultsForSearch: "-1"
                                    });

                                    $(".select2-offscreen").select2({
                                        minimumResultsForSearch: "-1"
                                    });     
                                </script>

                                <div id="div_property_features_loader" style="min-height:2px"></div>
                                <div class="alert alert-danger block-inner" style="display: none;" id="div_property_feature_error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Error
                                </div>
                                
                                <div class="alert alert-success block-inner" style="display: none;" id="div_property_feature_success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        Success
                                </div>

                                <script type="text/javascript">
                                    //load_property_features();
                                </script>
                                <div class="datatable-tools">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Feature Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($property_features as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->property_feature_name; ?></td>
                                                    <td><?php echo $row->property_feature_description; ?></td>
                                                    <td><?php echo $row->property_feature_type_name; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" role="button" href="#modal_edit_propertyfeature" onclick="return property_feature_edit_load(<?php echo $row->property_feature_id;?>);" class="label label-success btn-icon"><i class="icon-pencil"></i></a>
                                                        <a onClick="javascript:return confirm('Do you really wish to delete this Property Feature?');" href="javascript:delete_property_feature(<?php echo $row->property_feature_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
