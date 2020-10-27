<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="../js/JS.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <h1 class="navbar-brand text-white" href="#">Math</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-5">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="Calculo.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Tables.php">Multiplication tables</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="container mt-5">
            <p>Choose a number:</p>
            <form class="mt-4"  method="post" name="operar">
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                        <input type="text" class="form-control" id="num" name="num1" placeholder="Enter a number" onkeypress='return decimal(event)'>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <button class="btn btn-success" type="submit" name="btn" value="Enviar">Submit</button>
                    </div>
                </div>
            </form>

            <?php
            $num_inserted = 0;
            $multiplication = 0;
            $cont = 1;

            if (isset($_POST['num1'])) {
                $num_inserted = $_POST['num1'];
            } else {
                echo "";
            }
            echo "<table>";

            if ($num_inserted != 0) {
                while ($cont <= 10) {
                    echo "<tr>";
                    echo "<td>";
                    echo $num_inserted . " x " . $cont . " = " . $num_inserted * $cont;
                    echo "</td>";
                    echo "</tr>";
                    $cont++;
                }
            } else {
                echo "Inserted a number plis";
            }

            echo "</table>";
            ?>

        </div>
    </body>
</html>