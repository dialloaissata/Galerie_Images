<!-- Le main, affiche les images de la galerie-->
<main>
    <section id="container">
        <?php foreach ($allImages as $image) : ?>
            <img src="/assets/img/<?= $image["imageName"] ?>" alt="<?= $image["imageDescription"] ?>">
        <?php endforeach; ?>
    </section>
    <button type="submit"><?= $trad["image"]["titre"] ?></button>
</main>