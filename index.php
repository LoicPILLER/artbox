<?php
include 'header.php';
include 'db.php';

$db = dbConnect();
$works = $db->query('SELECT * FROM work')->fetchAll();
?>

<div id="liste-oeuvres">
    <?php foreach ($works as $work) : ?>
        <article class="oeuvre">
            <a href="work.php?id=<?= $work['work_id'] ?>">
                <img src="<?= $work['img_url'] ?>" alt="<?= $work['title'] ?>">
                <h2><?= $work['title'] ?></h2>
                <p class="description"><?= $work['artist'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>