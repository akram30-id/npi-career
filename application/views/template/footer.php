<div class="section-end">
    <div class="container-lg">
        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-sm-4 d-none d-lg-block">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body">
                        <img src="<?= BASE_URL() . 'assets/img/pt-nippisun.jpg' ?>" style="max-width: 400px;" alt="PT Nippisun Indonesia">
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <h4 class="text-start mt-5"><b>PT. Nippisun Indonesia Factory 1</b></h4>
                <p class="text-start">PT. Nippisun Indonesia, Blok I Jl. Sulawesi No.1-1, Gandamekar, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Barat 17530.</p>
                <h4 class="text-start mt-5"><b>PT. Nippisun Indonesia Factory 2</b></h4>
                <p class="text-start">PT. Nippisun Indonesia, Jl. Irian Blok PP, Jatiwangi, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Barat 17530.</p>
            </div>
        </div>
        <p class="text-center mt-5">&copy;2022 Nippisun Indonesia</p>
    </div>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- FONTAWESOME JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 50,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        direction: "vertical",
        spaceBetween: 50,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<?php if (isset($ajax_url)) {
    foreach ($ajax_url as $ajax) {
?>

        <script type="<?= $ajax['type'] ?>" src="<?= BASE_URL() . $ajax['src'] ?>"></script>

<?php }
} else {
    echo "";
}
?>

</body>

</html>