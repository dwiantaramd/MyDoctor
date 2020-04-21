    <!-- Main Page-->
    <div class="col-md-10 p-5 pt-2">
        <h2><i class="fas fa-hospital mr-2"></i>Hospital List</h2>
        <hr>
        <a href="" class="btn btn-primary mb-3 addHospitalbtn" data-toggle="modal" data-target="#hospitalModal"><i class="fas fa-plus mr-2"></i>Add Hospital</a>
        <?= $this->session->flashdata('message'); ?>
        <?= form_error('hos_name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('hos_address', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('hos_image', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <table id="hospitalTable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 9%">Image</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Address</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($hospital as $h) : ?>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><?= $i ?> </th>
                        <td style="vertical-align: middle"><img src="<?= base_url('assets/img/hospital/') . $h['hos_image']; ?>" style="width:100px;height:70px"></td>
                        <td style="vertical-align: middle"><?= $h['hos_name']; ?></td>
                        <td style="vertical-align: middle"><?= $h['hos_address']; ?></td>
                        <td style="vertical-align: middle">
                            <button type="button" class="btn btn-info EditHospitalModal" data-toggle="modal" data-target="#hospitalModal" data-hos_id="<?= $h['hospital_id'] ?>"><i class="fas fa-edit mr-1"></i>Edit</button>
                            <a href="<?= base_url('Hospital/delHospital/') . $h['hospital_id']; ?>" type="button" class="btn btn-danger delHospitalbtn"><i class="fas fa-trash mr-1"></i>Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>

    <!-- Modal -->
    <!-- Modal Add/Edit Hospital -->
    <div class="modal fade" id="hospitalModal" tabindex="-1" role="dialog" aria-labelledby="hospitalModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LabelhospitalModal">Add Hospital Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" id="HospitalForm" action="<?= base_url('Hospital/addHospital'); ?>">
                    <input type="hidden" name="hos_id" id="hos_id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Hospital Name</label>
                            <input type="text" class="form-control" id="hos_name" name="hos_name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Hospital Address</label>
                            <input type="text" class="form-control" id="hos_address" name="hos_address">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Image</label>
                            <input type="file" class="form-control" id="hos_image" name="hos_image">
                        </div>
                    </div>
                    <div class="modal-footer footer-hospital">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>