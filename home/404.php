 <?php
include ('../layout/header.php'); 
?>
<main>
        <div class="section position-relative"
            style="background-image: url(../assets/image/image-1920x900-7.jpg); height: 100vh;">
            <div class="cta-overlay"></div>
            <div class="r-container text-white position-relative w-100 h-100 d-flex flex-column gap-3 justify-content-center align-items-left mx-auto"
                style="z-index: 2;">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col mb-3">
                        <h1 class="font-1 text-404">404</h1>
                        <h3 class="font-1">Oops! Page Not Found.</h3>
                        <p>We're sorry, but it seems like you've ventured into uncharted financial territory. It appears
                            the
                            page you're looking for has slipped through the cracks of our investments.</p>
                        <div>
                            <a href="../" class="btn btn-accent px-4 py-3 rounded-pill">BACK TO HOME</a>
                        </div>
                    </div>
                    <div class="col mb-3">

                    </div>
                </div>
            </div>
        </div>
    </main>
 <script>
function toggleIcon(button) {
    const img = button.querySelector('img');
    const rightIcon = '../assets/icons/align-3-right.svg';
    const leftIcon = '../assets/icons/align-3-left.svg';

    // Toggle the icon
    img.src = img.src.includes('align-3-right.svg') ? leftIcon : rightIcon;
}
</script>

    <script src="../assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/swiper-script.js"></script>
    <script src="../assets/js/submit-form.js"></script>
    <script src="../assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="../assets/js/video_embedded.js"></script>
    <script src="../assets/js/vendor/fslightbox.js"></script>
</body>

</html>
