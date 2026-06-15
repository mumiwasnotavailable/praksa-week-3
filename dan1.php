<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Dan 1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            color: #222;
            margin: 0;
        }

        header {
            background: linear-gradient(120deg, #0d6efd, #0a3d91);
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        main {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        .box {
            background-color: white;
            padding: 24px;
            border-radius: 14px;
            margin-bottom: 25px;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
        }

        h2 {
            color: #0d6efd;
            margin-top: 0;
        }

        li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>

    <?php
        $ime = "Muamer";
        $sedmica = 3;
        $dan = 1;
        $tema = "Backend osnove - PHP";

        $sportasi = [
            "Cristiano Ronaldo",
            "Lionel Messi",
            "Novak Đoković",
            "LeBron James"
        ];
    ?>

    <header>
        <h1>Prva PHP stranica</h1>
        <p>Week 3 - Dan 1: Backend osnove</p>
    </header>

    <main>
        <section class="box">
            <h2>Osnovni podaci</h2>

            <p>Ime studenta: <strong><?php echo $ime; ?></strong></p>
            <p>Sedmica prakse: <strong><?php echo $sedmica; ?></strong></p>
            <p>Dan: <strong><?php echo $dan; ?></strong></p>
            <p>Tema: <strong><?php echo $tema; ?></strong></p>
        </section>

        <section class="box">
            <h2>Uslov u PHP-u</h2>

            <?php if ($dan == 1): ?>
                <p>Danas učimo osnove PHP-a, varijable, uslove i petlje.</p>
            <?php else: ?>
                <p>Danas radimo neki drugi backend zadatak.</p>
            <?php endif; ?>
        </section>

        <section class="box">
            <h2>Lista sportaša</h2>

            <ul>
                <?php foreach ($sportasi as $sportas): ?>
                    <li><?php echo $sportas; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="box">
            <h2>Zaključak</h2>

            <p>
                Ova stranica prikazuje osnovni dinamički sadržaj pomoću PHP-a.
                Korištene su varijable, uslov i foreach petlja.
            </p>
        </section>
    </main>

</body>

</html>