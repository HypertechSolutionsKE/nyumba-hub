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

                                    <div class="datatable-tools">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Property Title</th>
                                                    <th>Property SKU</th>
                                                    <th>Listing Type</th>
                                                    <th>Property Type</th>
                                                    <th>Property Subcategory</th>
                                                    <th>Region</th>
                                                    <th>City</th>
                                                    <th>Area</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($properties as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->property_title; ?></td>
                                                        <td><?php echo $row->property_sku; ?></td>
                                                        <td><?php echo $row->listing_type_name; ?></td>
                                                        <td><?php echo $row->property_type_name; ?></td>
                                                        <td><?php echo $row->property_subcategory_name; ?></td>
                                                        <td><?php echo $row->region_name; ?></td>
                                                        <td><?php echo $row->city_name; ?></td>
                                                        <td><?php echo $row->area_name; ?></td>            
                                                        <td><?php echo $row->price; ?></td>
                                                        <td>
                                                            <a role="button" href="<?php echo base_url(); ?>be/properties/edit_start/<?php echo $row->property_id; ?>" class="label label-success btn-icon"><i class="icon-pencil" title="Edit Property"></i></a>
                                                            <?php if ($row->publish_status == 'Offline'): ?>
                                                                <a onClick="javascript:return confirm('Do you really wish to set this Property Listing as Online?');" href="javascript:set_online(<?php echo $row->property_id; ?>);" class="label label-primary btn-icon"><i class="icon-switch" title="Set Offline"></i></a>
                                                            <?php else: ?>
                                                                <a onClick="javascript:return confirm('Do you really wish to set this Property Listing as Offline?');" href="javascript:set_offline(<?php echo $row->property_id; ?>);" class="label label-success btn-icon"><i class="icon-switch" title="Set Online"></i></a>
                                                            <?php endif; ?>
                                                            <?php if ($row->featured == 'No'): ?>
                                                                <a onClick="javascript:return confirm('Do you really wish to set this Property Listing as Featured?');" href="javascript:set_featured(<?php echo $row->property_id; ?>);" class="label label-primary btn-icon"><i class="icon-tags2" title="Set Featured"></i></a>
                                                            <?php else: ?>
                                                                <a onClick="javascript:return confirm('Do you really wish to unset this Property Listing as Featured?');" href="javascript:unset_featured(<?php echo $row->property_id; ?>);" class="label label-success btn-icon"><i class="icon-tags2" title="Unset Featured"></i></a>
                                                            <?php endif; ?>
                                                            <a onClick="javascript:return confirm('Do you really wish to delete this Property Listing?');" href="javascript:delete_property(<?php echo $row->property_id; ?>);" class="label label-danger btn-icon"><i class="icon-remove3"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
