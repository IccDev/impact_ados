<?php
// Page des coordonnées et lieux.
global $basePath;
include '../includes/header.php';
?>

    <main>
        <!-- Coordonnées et lieux -->
        <section class="hero">
            <h1>Adresse du camp</h1>
            <p><b>Retrouvez ici l’adresse du camp, de ICC Lyon ainsi que de l'église principale ICC Paris.</b></p>
        </section>

        <section class="cards">
            <article class="card">
                <h2>Adresse du camp</h2>
                <p><b>Lycée Agricole Privé <br> Etienne Gautier de Ressins</b></p>
                <p><b>Ressins, 42123 Perreux – France</b></p>
            </article>

            <article class="card">
                <h2>ICC LYON</h2>
                <p><b>ICC LYON</b></p>
                <p><b>98 Rue Alexandre Dumas, 69120 Vaulx-en-Velin (France)</b></p>
                <img src="<?php echo $basePath; ?>/assets/images/logo.jpeg" alt="Logo du camp" class="brand__logo">
            </article>

            <article class="card">
                <h2>Église principale</h2>
                <p><b>ICC PARIS</b></p>
                <p><b>21 rue des Vieilles Vignes, 77183 Croissy Beaubourg (France).</b></p>
            </article>
        </section>
    </main>

<?php include '../includes/footer.php'; ?>