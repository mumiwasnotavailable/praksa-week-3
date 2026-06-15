<?php
include "config.php";

$sql = "SELECT * FROM sportasi";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Dan 4/6</title>

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
            max-width: 1100px;
            margin: 40px auto;
        }
        .success {
            background-color: #d1e7dd;
            color: #0f5132;
            border-left: 5px solid #198754;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
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

        .top-link {
            display: inline-block;
            background-color: #0d6efd;
            color: white;
            padding: 11px 16px;
            border-radius: 8px;
            text-decoration: none;
            margin-bottom: 18px;
        }

        .top-link:hover {
            background-color: #0a58ca;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #e7f0ff;
            color: #0d6efd;
        }

        tr:hover {
            background-color: #f4f7fb;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            margin-right: 5px;
            font-size: 14px;
        }

        .edit-btn {
            background-color: #198754;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .edit-btn:hover {
            background-color: #146c43;
        }

        .delete-btn:hover {
            background-color: #bb2d3b;
        }
    </style>
</head>

<body>

    <header>
        <h1>SportBase PHP</h1>
        <p>Week 3 - Prikaz, uređivanje i brisanje podataka</p>
    </header>

    <main>
        <?php if (isset($_GET["poruka"])): ?>
    <?php if ($_GET["poruka"] == "obrisan"): ?>
        <div class="success">
            Sportaš je uspješno obrisan.
        </div>
    <?php elseif ($_GET["poruka"] == "uredjen"): ?>
        <div class="success">
            Podaci o sportašu su uspješno uređeni.
        </div>
    <?php endif; ?>
    <?php endif; ?>
        <section class="box">
            <h2>Lista sportaša iz baze</h2>

            <a class="top-link" href="create.php">Dodaj novog sportaša</a>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ime</th>
                            <th>Sport</th>
                            <th>Država</th>
                            <th>Godina rođenja</th>
                            <th>Uspjeh</th>
                            <th>Akcije</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["ime"]; ?></td>
                                <td><?php echo $row["sport"]; ?></td>
                                <td><?php echo $row["drzava"]; ?></td>
                                <td><?php echo $row["godina_rodjenja"]; ?></td>
                                <td><?php echo $row["uspjeh"]; ?></td>
                                <td>
                                    <a class="edit-btn" href="edit.php?id=<?php echo $row["id"]; ?>">
                                        Uredi
                                    </a>

                                    <a class="delete-btn" href="delete.php?id=<?php echo $row["id"]; ?>">
                                        Obriši
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Nema podataka u bazi.</p>
            <?php endif; ?>
        </section>

        <section class="box">
            <h2>Objašnjenje</h2>

            <p>
                Ova stranica prikazuje podatke iz MySQL baze. Dodana je kolona
                za akcije, kroz koju se može otvoriti stranica za uređivanje ili
                brisanje pojedinačnog zapisa.
            </p>
        </section>
    </main>

</body>

</html>