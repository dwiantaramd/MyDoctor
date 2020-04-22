    <!-- Main Page-->
    <div class="col-md-10 p-5 pt-2">
        <h2><i class="fas fa-users mr-2"></i>User List</h2>
        <hr>
        <table id="MemberTable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($member as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i ?> </th>
                        <td><?php if ($m['role'] == 1) {
                                echo 'Admin';
                            } else {
                                echo 'Member';
                            }; ?></td>
                        <td><?= $m['name']; ?></td>
                        <td><?= $m['username']; ?></td>
                        <td><?= $m['email']; ?></td>
                        <td><?= $m['phone']; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>