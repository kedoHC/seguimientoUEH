<?php
include "../config/config.inc";
include "cabecera.inc";
/*imagen 1*/
$uploadedfileload1="true";
if (!($_FILES['uploadedfile1']['type'] =="image/jpg" OR $_FILES['uploadedfile1']['type'] =="image/jpeg")){
	?>
	<script>
		swal({
		  title: "¡Imagen 1 no valida!",
		  text: "Las imagenes solo pueden ser JPG o JPEG",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'nuevo-noticias.php';
		}
		});
		/*swal("¡Img 1 NO valida!", "Las imagenes solo pueden ser .JPG o .JPEG.", "error");
		window.location="casoexito.php";*/
	</script>
	<?php
	$uploadedfileload1="false";
}
$file_name1=$_FILES['uploadedfile1']['name'];
$add1="$file_name1";

/*imagen 2*/
$uploadedfileload2="true";
if (!($_FILES['uploadedfile2']['type'] =="image/jpg" OR $_FILES['uploadedfile2']['type'] =="image/jpeg")){
	?>
	<script>
		/*swal("¡Img 2 NO valida!", "Las imagenes solo pueden ser .JPG o .JPEG.", "error");
		window.location="casos-exito.php";*/
		swal({
		  title: "¡Imagen 2 no valida!",
		  text: "Las imagenes solo pueden ser JPG o JPEG",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'nuevo-noticias.php';
		}
		});
	</script>
	<?php
	$uploadedfileload2="false";
}
$file_name2=$_FILES['uploadedfile2']['name'];
$add2="$file_name2";

/*imagen 3*/
$uploadedfileload3="true";
if (!($_FILES['uploadedfile3']['type'] =="image/jpg" OR $_FILES['uploadedfile3']['type'] =="image/jpeg")){
	?>
	<script>
	swal({
		  title: "¡Imagen 3 no valida!",
		  text: "Las imagenes solo pueden ser JPG o JPEG",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'nuevo-noticias.php';
		}
		});
		/*swal("¡Img 3 NO valida!", "Las imagenes solo pueden ser .JPG o .JPEG.", "error");
		window.location="casos-exito.php";*/
	</script>
	<?php
	$uploadedfileload3="false";
}
$file_name3=$_FILES['uploadedfile3']['name'];
$add3="$file_name3";

if($uploadedfileload1 == "true" && $uploadedfileload2 == "true" && $uploadedfileload3 == "true"){

	if(move_uploaded_file ($_FILES['uploadedfile1']['tmp_name'], $add1) &&
		move_uploaded_file ($_FILES['uploadedfile2']['tmp_name'], $add2) &&
		move_uploaded_file ($_FILES['uploadedfile3']['tmp_name'], $add3)
		){
		/*imagen 1 base 64*/
		$imagedata1 = file_get_contents($file_name1);
		$img641 = base64_encode($imagedata1);

		/*imagen 2 base 64*/
		$imagedata2 = file_get_contents($file_name2);
		$img642 = base64_encode($imagedata2);

		/*imagen 3 base 64*/
		$imagedata3 = file_get_contents($file_name3);
		$img643 = base64_encode($imagedata3);

		$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
		mysqli_set_charset($conexion, "utf8");

		$noticia = $_POST['noticia'];
		$text1 = $_POST['text1'];
		$text2 = $_POST['text2'];
		$text3 = $_POST['text3'];
		$text4 = $_POST['text4'];
		$text5 = $_POST['text5'];
		$pieimg1 = $_POST['pieimg1'];
		$pieimg2 = $_POST['pieimg2'];
		$fecha = date("d/m/Y");
		$estado = $_POST['estado'];

		$peticion = "INSERT INTO noticias VALUES (
			NULL,
			'".$noticia."',
			'".$text1."',
			'data:image/jpeg;base64,".$img641."',
			'data:image/jpeg;base64,".$img642."',
			'data:image/jpeg;base64,".$img643."',
			'".$pieimg1."',
			'".$pieimg2."',
			'".$text2."',
			'".$text3."',
			'".$text4."',
			'".$text5."',
			'".$fecha."',
			'".$estado."'
			)";
		$resultado = mysqli_query($conexion, $peticion);

			if($resultado){
				?>
				<script type="text/javascript">
					swal({
						  title: "¡Noticia creada!",
						  text: "Para publicar el estado debe ser Activo1-6",
						  type: "success",
						  allowEscapeKey: false,
						  allowOutsideClick: false
						 },
						function (confirmado) {
							if(confirmado){
								window.location.href = 'noticias.php';
						}
						});
				</script>
				<?php
			}
			else{
				?>
				<script type="text/javascript">
					swal({
					  title: "¡Error!",
					  text: "Cambios NO  realizados, consulta no realizada",
					  type: "error",
					  allowEscapeKey: false,
					  allowOutsideClick: false
					 },
					function (confirmado) {
						if(confirmado){
							window.location.href = 'noticias.php';
					}
					});
				</script>
				<?php	
			}
				}
		else{
			?>
			<script type="text/javascript">
				swal({
				  title: "¡Error!",
				  text: "Cambios NO guardados. Error del servidor",
				  type: "error",
				  allowEscapeKey: false,
				  allowOutsideClick: false
				 },
				function (confirmado) {
					if(confirmado){
						window.location.href = 'eventos.php';
				}
				});
			</script>
			<?php	
		}
/*}else{
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Error!",
			  text: "Las imagenes unicamente pueden ser JPG o JPEG.",
			  type: "error",
			  allowEscapeKey: false,
			  allowOutsideClick: false
			 },
			function (confirmado) {
				if(confirmado){
					window.location.href = 'casos-exito.php';
			}
			});
	</script>
	<?php	*/
}
?>