<?php
include 'header.php';
include 'works.php';
?>

<div id="liste-oeuvres">
    <?php foreach ($works as $work) : ?>
        <article class="oeuvre">
            <a href="work.php?id=<?= $work['id'] ?>">
                <img src="<?= $work['img'] ?>" alt="<?= $work['title'] ?>">
                <h2><?= $work['title'] ?></h2>
                <p class="description"><?= $work['artist'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>