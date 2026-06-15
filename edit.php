<?php
include "config.php";

if (!isset($_GET["id"])) {
    echo "ID nije pronađen.";
    exit();
}

$id = $_GET["id"];

$sql = "SELECT * FROM sportasi WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 1) {
    echo "Sportaš nije pronađen.";
    exit();
}

$sportas = mysqli_fetch_assoc($result);

$poruka = "";
$tipPoruke = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = trim($_POST["ime"]);
    $sport = trim($_POST["sport"]);
    $drzava = trim($_POST["drzava"]);
    $godina_rodjenja = trim($_POST["godina_rodjenja"]);
    $uspjeh = trim($_POST["uspjeh"]);

    if (empty($ime) || empty($sport) || empty($drzava) || empty($godina_rodjenja) || empty($uspjeh)) {
        $poruka = "Greška: sva polja moraju biti popunjena.";
        $tipPoruke = "error";
    } else {
        $updateSql = "UPDATE sportasi 
                      SET ime = '$ime',
                          sport = '$sport',
                          drzava = '$drzava',
                          godina_rodjenja = '$godina_rodjenja',
                          uspjeh = '$uspjeh'
                      WHERE id = $id";

        if (mysqli_query($conn, $updateSql)) {
            header("Location: index.php?poruka=uredjen");
            exit();
        } else {
            $poruka = "Greška pri uređivanju: " . mysqli_error($conn);
            $tipPoruke = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi sportaša</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            color: #222;
            margin: 0;
        }

        header {
            background: linear-gradient(120deg, #198754, #146c43);
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        main {
            width: 90%;
            max-width: 800px;
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
            color: #198754;
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
            background-color: #198754;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #146c43;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #198754;
            text-decoration: none;
        }

        .error {
            border-left: 5px solid #dc3545;
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header>
        <h1>Uredi sportaša</h1>
        <p>Week 3 - Dan 6: UPDATE upit i uređivanje podataka</p>
    </header>

    <main>

        <?php if (!empty($poruka)): ?>
            <section class="box <?php echo $tipPoruke; ?>">
                <p><?php echo $poruka; ?></p>
            </section>
        <?php endif; ?>

        <section class="box">
            <h2>Forma za uređivanje</h2>

            <form method="POST" action="">
                <label>Ime sportaša:</label>
                <input 
                    type="text" 
                    name="ime" 
                    value="<?php echo $sportas["ime"]; ?>"
                >

                <label>Sport:</label>
                <input 
                    type="text" 
                    name="sport" 
                    value="<?php echo $sportas["sport"]; ?>"
                >

                <label>Država:</label>
                <input 
                    type="text" 
                    name="drzava" 
                    value="<?php echo $sportas["drzava"]; ?>"
                >

                <label>Godina rođenja:</label>
                <input 
                    type="number" 
                    name="godina_rodjenja" 
                    value="<?php echo $sportas["godina_rodjenja"]; ?>"
                >

                <label>Najveći uspjeh:</label>
                <input 
                    type="text" 
                    name="uspjeh" 
                    value="<?php echo $sportas["uspjeh"]; ?>"
                >

                <button type="submit">Spremi izmjene</button>
            </form>

            <a href="index.php">Nazad na listu sportaša</a>
        </section>

    </main>

</body>

</html>