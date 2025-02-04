<?php
include 'header.php';
include 'works.php';

$id = $_GET['id'] ?? null;

if (!is_numeric($id)) {
    http_response_code(400);
    echo "<h1>Erreur 400</h1><p>L'identifiant fourni est invalide. Veuillez vérifier l'URL.</p>";
    exit;
}

$id = intval($id);
$work = null;
foreach ($works as $w) {
    if ($w['id'] === $id) {
        $work = $w;
        break;
    }
}

if ($work === null) {
    http_response_code(404);
    echo "<h1>Erreur 404</h1><p>Nous n'avons pas trouvé l'oeuvre que vous cherchez. Il se peut que l'URL soit incorrecte ou que l'oeuvre ne soit plus disponible.</p>";
    exit;
}
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $work['img'] ?>" alt="<?= $work['title'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $work['title'] ?></h1>
        <p class="description"><?= $work['artist'] ?></p>
        <p class="description-complete"><?= $work['description'] ?></p>
    </div>
</article>

<?php include 'footer.php'; ?>