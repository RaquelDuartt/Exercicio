<!Doctype html>
<html>
<body>
    <?php
    $vetor = array();
    $vetor [0] = $_POST["n1"];
    $vetor [1] = $_POST["n2"];
    $vetor [2] = $_POST["n3"];
    $vetor [3] = $_POST["n4"];
    $vetor [4] = $_POST["n5"];

    echo count($vetor) . "posições</br>";
    array_push($vetor,60, 80);

    echo count($vetor) . "posições</br>";
    $soma = 0;
    for($i = 0; $i < count($vetor); $i++){
        $soma = $soma + $vetor[$i];
    }
    echo"A soma é:" . $soma;
    ?>
</body>
</html>
