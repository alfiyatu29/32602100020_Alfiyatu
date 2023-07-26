<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web</title>
</head>
<body>
        <?= $this->include('layoutlatihan/navbar'); ?>

        <?= $this->renderSection('content'); ?>

        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <footer>
                        ini adalah footer
                    </footer>
                </div>
            </div>
        </div>
</body>
</html>