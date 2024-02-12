<?php

if (file_exists(__DIR__ . "/database/database.php")) {
    require __DIR__ . "/database/database.php";
} else {
    die('Error 404: Problème de fichier');
}

$db = getPDO();
$passed_jiris = $db->query("select * from jiris where starting_at < current_timestamp order by starting_at desc");
$upcoming_jiris = $db->query("select * from jiris where starting_at > current_timestamp order by starting_at desc");


?>

<!doctype>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Jiri</title>
</head>
<body class="flex flex-col gap-4 container mx-auto">
<nav>
    <h2 class="hidden">Menu Principal</h2>
    <ul class="flex gap-4">
        <li><a href="/jiris">Jiris</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>
</nav>

<main class="flex flex-col gap-4">
    <h1 class="font-bold">Mes Jurys</h1>

    <section>
        <h2 class="font-bold">Jiri à venir</h2>
        <?php if ($passed_jiris): ?>
            <ol>
                <?php foreach ($passed_jiris as $jiri): ?>
                    <li><a class='text-blue-400' href="/jiris?id=<?= $jiri->id ?>"><?= $jiri->name ?></a></li>
                <?php endforeach ?>
            </ol>
        <?php endif ?>
    </section>

    <section>
        <h2 class="font-bold">Jiri à Passées</h2>
        <?php if ($upcoming_jiris): ?>
            <ol>
                <?php foreach ($upcoming_jiris as $jiri): ?>
                    <li><a class='text-blue-400' href="/jiris?id=<?= $jiri->id ?>"><?= $jiri->name ?></a></li>
                <?php endforeach ?>
            </ol>
        <?php endif ?>
    </section>
</main>


</body>
</html>