<!-- Modal Edit Profile -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LabeleditProfileModal">My Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data" id="editProfileForm" action="<?= base_url('Admin/editProfile/') . $user['id'] ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <img src="<?= base_url('assets/img/') . $user['image'] ?>" style="width:80px; height:80px">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Username</label>
                        <input type="text" class="form-control" id="edit_username" name="edit_username" value="<?= $user['username'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Full Name</label>
                        <input type="text" class="form-control" id="edit_name" name="edit_name" value="<?= $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control" id="edit_email" name="edit_email" value="<?= $user['email'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Phone Number</label>
                        <input type="text" class="form-control" id="edit_phone" name="edit_phone" value="<?= $user['phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Profile Picture</label>
                        <input type="file" class="form-control" id="edit_image" name="edit_image">
                    </div>
                </div>
                <div class="modal-footer footer-hospital">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/admin.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>

</body>

</html>