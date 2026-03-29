<?php
// Page galerie photos.
global $basePath;
include '../includes/header.php';
?>

    <main>
        <section class="hero">
            <h1>Photos</h1>
            <p>Quelques photos du Summer Camp sont affichées ci-dessous.</p>
        </section>

        <section class="carousel" id="photoCarousel" aria-label="Carrousel de photos">
            <button class="carousel-btn prev" type="button" aria-label="Photo précédente">‹</button>

            <div class="carousel-track">
                <div class="carousel-slide">
                    <img src="<?php echo $basePath; ?>/assets/images/img_1.png" alt="photo1_camp2025">
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo $basePath; ?>/assets/images/img_2.png" alt="photo2_camp2025">
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo $basePath; ?>/assets/images/img_3.png" alt="photo3_camp2025">
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo $basePath; ?>/assets/images/img_4.png" alt="photo4_camp2025">
                </div>
                <div class="carousel-slide">
                    <img src="<?php echo $basePath; ?>/assets/images/img_5.png" alt="photo5_camp2025">
                </div>
            </div>

            <button class="carousel-btn next" type="button" aria-label="Photo suivante">›</button>
            <div class="carousel-dots"></div>
        </section>
    </main>

<?php include '../includes/footer.php'; ?>