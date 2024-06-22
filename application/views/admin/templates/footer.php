</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/assets_stis/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
    function deleted(url) {
        Swal.fire({
            title: "Yakin menghapus data ini ?",
            text: "Data akan terhapus secara permanen tidak dapat dikembalikan dan akan berpengaruh jika ada relasi data !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Hapus !!",

        }).then(result => {
            if (result.value) {
                window.location.href = url;
            }
        })
        return false;
    };
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

<!-- Sweet Alerts js -->
<script src="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/assets_stis/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/chart.js/Chart.min.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/assets_stis/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/assets_stis/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url('assets/assets_stis/') ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('assets/assets_stis/') ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/assets_stis/') ?>js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url('assets/dropify/') ?>dropify.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>
</body>

</html>