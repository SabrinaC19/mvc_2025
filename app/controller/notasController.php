<?php

    use App\Mvc2025\Model\notasModel as NotasModel;
    
    $notasModel = new NotasModel();

    if (isset($_GET['url'])) {
        
        if ($_GET['url'] === 'promedio') {
            
            if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {

                $notasModel->getNotas($_POST['nota1'], $_POST['nota2'], $_POST['nota3']);

                $result = $notasModel->calcularPromedio();

            }

        include 'app/view/notasView.php';

        } else {
            die("Error 404");
        }

    } else {
        die("<script>window.location='?url=promedio'</script>");
    }


?>