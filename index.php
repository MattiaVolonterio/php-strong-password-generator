<?php

$form_sendt = !empty($_GET);

if ($form_sendt) {
    $password_length = $_GET["password-length-selection"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center fw-bold">PHP Strong Password Generator</h1>

        <!-- CARD -->
        <div class="card mt-5">
            <div class="card-body">
                <!-- FORM -->
                <form method="GET" class="row">
                    <div class="col-6 d-flex align-items-center">
                        <label for="password-length" class="form-label mb-0 fw-bold">Seleziona la lunghezza della
                            password da
                            generare</label>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" id="password-length" name="password-length-selection"
                            min="8" max="16" value="<?= $form_sendt ? $password_length : "" ?>">
                    </div>

                    <div class="col-2 mt-3">
                        <button class="btn btn-success">Genera Password</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>