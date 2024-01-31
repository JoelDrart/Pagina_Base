<?php
    include('../config/config.php');
    include('../view/VPlantilla.php');

    $sql = "SELECT * FROM datos";
    $resultado = mysqli_query($conexion, $sql);

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Títulos de las columnas
    $header = array('ID', 'Nombres', 'Apellidos');

    

    // Anchuras de las columnas
    $w = array(20, 50, 50);
    // Cabeceras
    $pdf->Cell(35);
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],10,$header[$i],1,0,'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',13);
    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(35);
        $pdf->Cell($w[0],9,$mostrar['id'],'LR',0,'C');
        $pdf->Cell($w[1],9,$mostrar['nombre'],'LR');
        $pdf->Cell($w[2],9,$mostrar['apellido'],'LR');
        // $pdf->Cell($w[3],6,$mostrar['clave'],'LR',0,'R');
        $pdf->Ln();
    }
    $pdf->Cell(35);
    $pdf->Cell(array_sum($w),0,'','T');
    
    $pdf->Output('I','Reporte.pdf');
?>