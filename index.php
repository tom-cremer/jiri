<?php
    $jiris = [
            [
                'id'=>1,
                'name'=>'Projet Web 2025',
                'starting_at'=>DateTimeImmutable::createFromFormat("j-M-Y", "14-Juin-2025")
            ],
            [
                'id'=>2,
                'name'=>'Projet Web 2026',
                'starting_at'=>DateTimeImmutable::createFromFormat("j-M-Y", "18-Juin-2026")
            ],
            [
                'id'=>3,
                'name'=>'Design Web 2025',
                'starting_at'=>DateTimeImmutable::createFromFormat("j-M-Y", "12-Jan-2025")
            ],
            [
                'id'=>4,
                'name'=>'Design Web 2026',
                'starting_at'=>DateTimeImmutable::createFromFormat("j-M-Y", "16-Jan-2026")
            ]

    ];

// branche feature et develop, puis fusionné avec une pull request
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
        <?php if ($jiris): ?>
            <ol>
                <?php foreach ($jiris as $jiri): ?>
                    <li><a href="/jiri?id=<?= $jiri['id'] ?>"><?= $jiri['name'] ?></a></li>
                <?php endforeach ?>
            </ol>
        <?php endif ?>
    </section>

    <section>
        <h2 class="font-bold">Jiri à Passées</h2>
        <ol>
            <li><a href="/jiri?id=3">Projets Web 2023</a></li>
            <li><a href="/jiri?id=4">Design Web 2023</a></li>
        </ol>
    </section>
</main>


</body>
</html>