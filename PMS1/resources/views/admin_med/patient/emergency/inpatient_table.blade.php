<div class="tab-pane fade" id="inpatient1" role="tabpanel">
    <div class="pt-4">
        <div class="table-responsive">
            <table id="example2" class=" display" style="width:100%">
                <thead>
                    <tr>
                        <th>Last name</th>
                        <th>First name</th>
                        <th>Priority Level</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Satou</td>
                        <td>Airi</td>
                        <td>Non-Urgent</td>
                        <td>Waiting for doctor</td>
                        <td>
                            <a href="{{ url('emergency_view') }}" class="btn btn-square btn-success mr-4"
                                data-toggle="tooltip" type="button" data-placement="top" title="View">
                                <i class="fa fa-eye color-muted"></i> </a>
                            <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                <i class="fa fa-pencil color-muted"></i> </a>
                            <a href="javascript:void()" class="btn btn-square btn-danger" data-toggle="tooltip"
                                type="button" data-placement="top" title="Close">
                                <i class="fa fa-close color-danger"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>Satou</td>
                        <td>Airi</td>
                        <td>Non-Urgent</td>
                        <td>Waiting for doctor</td>
                        <td>
                            <a href="{{ url('emergency_view') }}" class="btn btn-square btn-success mr-4"
                                data-toggle="tooltip" type="button" data-placement="top" title="View">
                                <i class="fa fa-eye color-muted"></i> </a>
                            <a href="{{ url('edit') }}" class="btn btn-square btn-secondary mr-4"
                                data-toggle="tooltip" type="button" data-placement="top" title="Edit">
                                <i class="fa fa-pencil color-muted"></i> </a>
                            <a href="javascript:void()" class="btn btn-square btn-danger" data-toggle="tooltip"
                                type="button" data-placement="top" title="Close">
                                <i class="fa fa-close color-danger"></i></a>
                        </td>
                    </tr>


                </tbody>
                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>