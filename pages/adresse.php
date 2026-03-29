<?php
// Page des coordonnées et lieux.
global $basePath;
include '../includes/header.php';
?>

    <main>
        <!-- Coordonnées et lieux -->
        <section class="hero">
            <h1>Adresse du camp</h1>
            <p>Retrouvez ici l’adresse du camp, le logo ICC et l’adresse de l’église principale.</p>
        </section>

        <section class="cards">
            <article class="card">
                <h2>Adresse du camp</h2>
                <p>Lycée Agricole Privé Etienne Gautier <br>de Ressins</p>
                <p> Ressins, 42123 Perreux – France</p>
            </article>

            <article class="card">
                <h2>Logo ICC</h2>
                <p>Un espace est prévu pour afficher le logo du camp ou de l’organisation.</p>
                <img src="<?php echo $basePath; ?>/assets/images/logo.jpeg" alt="Logo du camp" class="brand__logo">
            </article>

            <article class="card">
                <h2>Église principale</h2>
                <p>L’adresse de l’église principale sera indiquée ici.</p>
            </article>
        </section>
    </main>

<?php include '../includes/footer.php'; ?>