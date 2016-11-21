<?php include "../config/cabecera.inc"; ?>
<script>
$(document).ready(function(){
    $("#next1").click(function(){
        $("#panel2").slideToggle("slow");
        $("#panel1").hide("slow");
    });
    $("#next2").click(function(){
        $("#panel3").slideToggle("slow");
        $("#panel1, #panel2").hide("slow");
    });
    $("#back2").click(function(){
        $("#panel1").slideToggle("slow");
        $("#panel2").hide("slow");
    });
    $("#next3").click(function(){
        $("#panel4").slideToggle("slow");
        $("#panel2, #panel3").hide("slow");
    });
    $("#back3").click(function(){
        $("#panel2").slideToggle("slow");
        $("#panel3").hide("slow");
    });
    $("#next4").click(function(){
        $("#panel5").slideToggle("slow");
        $("#panel3, #panel4").hide("slow");
    });
    $("#back4").click(function(){
        $("#panel3").slideToggle("slow");
        $("#panel4").hide("slow");
    });
    $("#back5").click(function(){
        $("#panel4").slideToggle("slow");
        $("#panel5").hide("slow");
    });
});
</script>
<style>
#panel1, #panel2, #panel3, #panel4, #panel5{
    margin-top: 100px;
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
    height: 387px;  
}
#panel2, #panel3, #panel4, #panel5 {
    display: none;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <form action="alta-egresados.php" method="POST" class="form-horizontal" autocomplete="off">
        <div class="col-xs-12">
            <div id="panel1">
                <h1>¡Practica de entrevista!</h1>
                <div class="form-group">
                    <label for="nombre-egresado" class="col-sm-4 control-label">Nombre completo: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="nombre-egresado" name="nombre-egresado" required>
                      <p id="texto-ayuda-1" class="help-block">No olvides utilizar mayusculas y acentos.</p>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-xs-12 col-md-3"></div>
                  <div class="col-xs-12 col-md-3">
                    <a id="luego" class="btn btn-default btn-lg btn-block" href="principal.php" role="button">Luego</a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                    <a id="next1" class="btn btn-primary btn-lg btn-block"" role="button">Siguiente</a>
                  </div>
                  <div class="col-xs-12 col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="panel2">
                <p>PANEL 2</p>
                <button id="back2">Back</button>
                <button id="next2">Next</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="panel3">
            <p>PANEL 3</p>
            <button id="back3">Back</button>
            <button id="next3">Next</button>
    </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="panel4">
            <p>PANEL 4</p>
            <button id="back4">Back</button>
            <button id="next4">Next</button>
    </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="panel5">
            <p>PANEL 5</p>
            <button id="back5">Back</button>
            <button id="terminar">Terminar</button>
    </form>
    </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-4, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8" ).css("display","none");
    $(document).ready(function(){               
        $("#nombre-egresado").focus(function(){
            $("#texto-ayuda-1").show();
            $("#texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
        });
        $("#matricula-egresado").focus(function(){
            $("#texto-ayuda-2").show(); 
            $("#texto-ayuda-1, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6 #texto-ayuda-8").hide();
        });
        $("#titulo-egresado").focus(function(){
            $("#texto-ayuda-3").show();
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
        });
        $("#anio-egreso").focus(function(){
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
        });
        $("#telefono-egresado").focus(function(){
            $("#texto-ayuda-5").show();
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-6, #texto-ayuda-8").hide();
        });
        $("#correo-egresado").focus(function(){
            $("#texto-ayuda-6").show();
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-8").hide();
        });
        $("#fecha-nac-egresado").focus(function(){
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
        });
         $("#lugar-nac-egresado").focus(function(){
            $("#texto-ayuda-8").show();
            $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6").hide();
        });   
    });
</script>
<?php include "../config/pie.inc"; ?>
