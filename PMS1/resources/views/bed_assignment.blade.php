<div class="modal fade" id="bedModal" tabindex="-1" role="dialog" aria-labelledby="bedModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bedModalLabel">Select Available Bed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Filter by Type</label>
                    <select class="form-control">
                        <option value="all">All Beds</option>
                        <option value="icu">ICU Beds</option>
                        <option value="regular">Regular Beds</option>
                    </select>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Bed</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bed A1</td>
                            <td>ER1</td>
                            <td><span class="badge badge-success">Available</span></td>
                            <td><button class="btn btn-success btn-sm">Assign</button></td>
                        </tr>
                        <tr>
                            <td>Bed B3</td>
                            <td>ICU1</td>
                            <td><span class="badge badge-danger">Occupied</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bed C4</td>
                            <td>ER2</td>
                            <td><span class="badge badge-warning">Reserved</span></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>