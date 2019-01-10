<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
    
     $d1=$_POST['d1'];
	$d2=$_POST['d2'];
	$d3=$_POST['d3'];
	$d4=$_POST['d4'];

	$R1=$d1-$d2-$d3-$d4;
	$Producto=$d1*$d2*$d3*$d4;
	$Residuo=$d1/$d2/$d3/$d4;
	
	
	$Cua=($R1+5)**2;
	$R2=($Producto+5)**2;
	$R3=($Residuo+5)**2;


if (isset($_POST['Sumar'])) 
{
	
	$Res= $d1+$d2+$d3+$d4;
	$Cuadrado=($Res+5)**2;
	ducument.write($Res);
	document.write() $Cuadrado;



else if (isset($_POST['Restar']) )
	
         { 
	echo $R1;
		echo $Cua;
		 }

	else if(isset($_POST['Multiplicar']) )
	{
	
	echo $Producto;
		echo $R2; 
	}

		else if(isset($_POST['Dividir'])) 
		{
	
	echo $Residuo;
		echo $R3; 
	}
            
        }
  

?>
    </script>
   

</body>
</html>




