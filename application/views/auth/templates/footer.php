</div>
<script>
    function notif(types, titles, button) {
        Swal.fire({
            type: types,
            title: titles,
            showConfirmButton: button,
            timer: 1500
        })
    }
</script>
<script>
    function validasiInput(input) {
        // Hapus karakter non-angka dari input
        input.value = input.value.replace(/[^0-9]/g, '');

        // Periksa apakah ada pesan kesalahan yang ditampilkan
        var errorMessage = document.getElementById('error-message');
        if (isNaN(input.value) || input.value === '') {
            // Tampilkan pesan kesalahan jika input tidak valid
            errorMessage.style.display = 'block';
        } else {
            // Sembunyikan pesan kesalahan jika input valid
            errorMessage.style.display = 'none';
        }
    }
</script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/assets_stis/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sweet Alerts js -->
<script src="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/assets_stis/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>