<?php

if (empty($_POST) || empty($_POST['titre']) || empty($_POST['artiste']) || empty($_POST['image'])
    || empty($_POST['description']) || strlen($_POST['description']) < 3
    || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) {
    header('Location: add_work_form.php');
    exit;
} else {
    include 'db.php';

    $data = [
        'title' => htmlspecialchars($_POST['titre']),
        'artist' => htmlspecialchars($_POST['artiste']),
        'img_url' => htmlspecialchars($_POST['image']),
        'description' => htmlspecialchars($_POST['description'])
    ];

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO work (title, artist, img_url, description) VALUES (:title, :artist, :img_url, :description)');
    $query->execute($data);

    header('Location: work.php?id=' . $db->lastInsertId());
}