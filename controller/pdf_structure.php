<?php
    session_start();
    $pdf_info=$_SESSION['pdf_info'];

    $html_structure=("
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
        </head>
        <body>
            <h1>".$pdf_info['firs_sur']."</h1>
        </body>
        </html>
    ");
    $_SESSION['html_structure']=$html_structure;
    header("Location: ../view/imprimir.php");

?>