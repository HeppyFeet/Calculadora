<!DOCTYPE html>
<link rel="stylesheet" href="calculadora.css">

<body>
    <form>
        <div>
            <?php
            $v1 = isset($_GET["v1"]) ? $_GET["v1"] : 0;
            $v2 = isset($_GET["v2"]) ? $_GET["v2"] : 1;
            $op = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch ($op) {
                case 1:
                    $op = $v1 + $v2;
                    echo "A soma entre " . $v1 . " + " . $v2 . " = " . $op;
                    break;
                case 2:
                    $op = $v1 - $v2;
                    echo "A subtracao entre " . $v1 . " - " . $v2 . " = " . $op;
                    break;
                case 3:
                    $op = $v1 * $v2;
                    echo "A multiplicao entre " . $v1 . " * " . $v2 . " = " . $op;
                    break;
                case 4:
                    $op = $v1 / $v2;
                    echo "A Divisao entre " . $v1 . " / " . $v2 . " = " . $op;
                    
            }
            ?>

        </div>
        <br>
        <a href="index.html" button type="submit" class="btn btn-primary">Voltar</button></a>
    </form>

</body>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<html>