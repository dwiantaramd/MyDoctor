<!-- Main Page-->
    <div class="col-md-10 p-5 pt-2">
        <h2><i class="fas fa-users mr-2"></i>Your Appointment</h2>
        <hr>
        <button>Create Appointment</button>
        <table id="AppointmentTable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Hospital</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($appointment as $ap) : ?>
                    <tr>
                        <th scope="row"><?= $i ?> </th>
                        <td><?= $ap['customer_name']; ?></td>
                        <td><?= $ap['doctor_name']; ?></td>
                        <td><?= $ap['specialist_name']; ?></td>
                        <td><?= $ap['hospital_name']; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>