<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Dan 2</title>

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

        main {
            width: 90%;
            max-width: 850px;
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

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccd3dd;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #0a58ca;
        }

        .success {
            border-left: 5px solid #198754;
        }

        .error {
            border-left: 5px solid #dc3545;
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
        $ime = "";
        $sport = "";
        $drzava = "";
        $poruka = "";
        $tipPoruke = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ime = trim($_POST["ime"]);
            $sport = trim($_POST["sport"]);
            $drzava = trim($_POST["drzava"]);

            if (empty($ime) || empty($sport) || empty($drzava)) {
                $poruka = "Greška: sva polja moraju biti popunjena.";
                $tipPoruke = "error";
            } else {
                $poruka = "Podaci su uspješno uneseni.";
                $tipPoruke = "success";
            }
        }
    ?>

    <header>
        <h1>PHP forma</h1>
        <p>Week 3 - Dan 2: HTML forma i PHP obrada podataka</p>
    </header>

    <main>

        <section class="box">
            <h2>Unos sportaša</h2>

            <form method="POST" action="">
                <label>Ime sportaša:</label>
                <input 
                    type="text" 
                    name="ime" 
                    value="<?php echo htmlspecialchars($ime); ?>"
                >

                <label>Sport:</label>
                <input 
                    type="text" 
                    name="sport" 
                    value="<?php echo htmlspecialchars($sport); ?>"
                >

                <label>Država:</label>
                <input 
                    type="text" 
                    name="drzava" 
                    value="<?php echo htmlspecialchars($drzava); ?>"
                >

                <button type="submit">Pošalji podatke</button>
            </form>
        </section>

        <?php if (!empty($poruka)): ?>
            <section class="box <?php echo $tipPoruke; ?>">
                <p><?php echo $poruka; ?></p>

                <?php if ($tipPoruke == "success"): ?>
                    <h2>Uneseni podaci</h2>
                    <p>Ime sportaša: <strong><?php echo htmlspecialchars($ime); ?></strong></p>
                    <p>Sport: <strong><?php echo htmlspecialchars($sport); ?></strong></p>
                    <p>Država: <strong><?php echo htmlspecialchars($drzava); ?></strong></p>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <section class="box">
            <h2>Objašnjenje</h2>

            <p>
                Ova stranica koristi HTML formu i PHP kod za obradu podataka.
                Podaci se šalju metodom POST, zatim ih PHP preuzima, provjerava
                i prikazuje na stranici. Ako neko polje ostane prazno, prethodno
                uneseni podaci ostaju u formi.
            </p>
        </section>

    </main>

</body>

</html>