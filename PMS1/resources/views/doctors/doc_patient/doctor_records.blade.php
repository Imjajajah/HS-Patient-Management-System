@extends('doctors.doc_layout.index')

@section('doc_content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class=" display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Last name</th>
                                        <th>First name</th>
                                        <th>Bed Number</th>
                                        <th>Priority Level</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

                                   
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></span></td>
                                        <td></span></td>

                                        <td>
                                            <a href="javascript:void()" class="btn btn-square btn-primary mr-4"
                                                data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                onclick="">
                                                <i class="fa fa-eye color-muted"></i> </a>
                                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                onclick=""><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" class="btn btn-square btn-danger"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a>
                                        </td>
                                    </tr>
                                    tr>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td></span></td>
                                        <td></span></td>

                                        <td>
                                            <a href="javascript:void()" class="btn btn-square btn-primary mr-4"
                                                data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                onclick="">
                                                <i class="fa fa-eye color-muted"></i> </a>
                                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                onclick=""><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" class="btn btn-square btn-danger"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a>
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
            </div>

    </div>
</div>
@endsection