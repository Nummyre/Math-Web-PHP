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
            <p>Choose the operator:</p>
            <form class="mt-4"  method="post" name="operar">
                <div class="form-row">
                    <div class="col-md-3 mb-2">
                        <input type="text" class="form-control" id="a" name="aa" placeholder="Enter a number" onkeypress='return decimal(event)'>
                    </div>
                    <div class="col-0 ml-2 mb-2">
                        <select class="browser-default custom-select" id="opera" name="opera1">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="x">x</option>
                            <option value="/">/</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="b" name="bb" placeholder="Enter a number" onkeypress='return decimal(event)'>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <button class="btn btn-success" type="submit" name="btn" value="Enviar">Submit</button>
                    </div>
                </div>
            </form>
            <?php
            
            $operator = null;
            $a = 0;
            $b = 0;
            $res = 0;
            
            if (isset($_POST['opera1'])) {
                $operator = $_POST['opera1'];
            } else {
                echo"";
            }
            if (isset($_POST['aa'])) {
                $a = $_POST['aa'];
            } else {
                echo"";
            }
            if (isset($_POST['bb'])) {
                $b = $_POST['bb'];
            } else {
                echo"";
            }


            if ($operator == "+") {
                $res = $a + $b;
            } else if ($operator == "-") {
                $res = $a - $b;
            } else if ($operator == "x") {
                $res = $a * $b;
            } else if ($operator == "/") {
                $res = $a / $b;
            }

            echo "The result is: <strong>" . $res. "</strong>";
            ?>
        </div>
    </body>
</html>

