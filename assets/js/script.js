$(document).ready(function () {

    $('.appDetailBtn').on('click', function () {
        const id = $(this).data('appointment_id');
        $.ajax({
            url: 'http://localhost/MyDoctor/Appointment/getAppointmentDetails',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#cus_name').val(data.cus_name);
                $('#hosp_name').val(data.hospital_name);
                $('#doct_name').val(data.doctor_name);
                $('#spec').val(data.specialist);
                $('#app_date').val(data.appointment_date);
                $('#complaints').val(data.complaints);
            }
        });
    });

    $('.addHospitalbtn').on('click', function () {
        $('#LabelhospitalModal').html('Add Hospital Form');
        $('.footer-hospital button[type=submit]').html('Add');
        $('#hos_name').val("");
        $('#hos_address').val("");
        $('#HospitalForm').attr('action', 'http://localhost/MyDoctor/Hospital/addHospital');
    });

    $('.EditHospitalModal').on('click', function () {
        $('#LabelhospitalModal').html('Edit Hospital Form');
        $('.footer-hospital button[type=submit]').html('Update');
        $('#HospitalForm').attr('action', 'http://localhost/MyDoctor/Hospital/editHospital');

        const id = $(this).data('hos_id');

        $.ajax({
            url: 'http://localhost/MyDoctor/Hospital/getEdit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#hos_name').val(data.hos_name);
                $('#hos_address').val(data.hos_address);
                $('#hos_id').val(data.hospital_id);
            }
        });
    });

    $('.delHospitalbtn').on('click', function (e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action also delete all doctor and appointment linked to this data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });

    $('.addDoctorbtn').on('click', function () {
        $('#LabelDoctorModal').html('Add Doctor Form');
        $('.footer-doctor button[type=submit]').html('Add');
        $('#doc_name').val("");
        $('#specialist').val("");
        $('#hospital_name').val("");
        $('#doc_gender').val("");
        $('#doctor_id').val("");
        $('#DoctorForm').attr('action', 'http://localhost/MyDoctor/Doctor/addDoctor');
    });

    $('.EditDoctorbtn').on('click', function () {
        $('#LabelDoctorModal').html('Edit Doctor Form');
        $('.footer-doctor button[type=submit]').html('Update');
        $('#DoctorForm').attr('action', 'http://localhost/MyDoctor/Doctor/editDoctor');

        const id = $(this).data('doc_id');

        $.ajax({
            url: 'http://localhost/MyDoctor/Doctor/getEdit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#doc_name').val(data.doc_name);
                $('#specialist').val(data.specialist);
                $('#hospital_name').val(data.hospital_id);
                $('#doc_gender').val(data.doc_gender);
                $('#doctor_id').val(data.doctor_id);
            }
        });
    });

    $('.delDoctorbtn').on('click', function (e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action also delete all appointment linked to this data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });

    $('.appDeleteBtn').on('click', function (e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action can't be undone ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    });

});