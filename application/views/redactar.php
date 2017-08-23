<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://rawgit.com/markdalgleish/stellar.js/master/jquery.stellar.js'></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="imagenes/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/funciones.js"></script>
    <title>Domus</title>

<style type="text/css">
    .bs-twrapper{
    width: 30%;
    height:500px;
    overflow-x:scroll;
    overflow-x:hidden;
    padding-top:10px;
    margin-top: -350px;
    margin-left: 100px; 
    float: left;
}
    .cuerpo{
        float: right;
        margin-right: 100px;
    }
table{
    position: relative;
    margin: 10px auto;
    padding: 0;
    width: 100%;
    height: auto;
    border-collapse: collapse;
    text-align: center;
}

table > thead.sticky{
    height:42px;
    position:fixed;
    background:#fff;
    width:100% !important;
    margin-top:-40px;
}

table > thead.sticky > tr{
    width:500% !important;
}

table > thead th:nth-of-type(odd) {
   width:10%;
}
table > thead th:nth-of-type(even) {
   width:80%;
}

table > tbody td:nth-of-type(odd) {
   width:10%;
}
table > tbody td:nth-of-type(even) {
   width:80%;
}
tbody.scroll{
    width:100%;  
}
td {
    font-size: 12px;
}
.opciones {
width: 702px;
border: 1px #000000 solid;
margin-left: 290px;

}



#textBox {
width: 700px;
height: 400px;
border: 1px #000000 solid;
padding: 10px;
overflow: scroll;
}
</style>
<script>
    function formatoFuente(sCmd, sValue) {
    document.execCommand(sCmd, false, sValue);
    }
function processFiles(files) {
    var file = files[0];
    var reader = new FileReader();
    reader.onload = function (e) {
    var output = document.getElementById("textBox");
        output.innerHTML = e.target.result;
    };
        reader.readAsText(file);
}

// ---------------------------------------

var dropBox;
    window.onload = function() {
        dropBox = document.getElementById("textBox");
        dropBox.ondragenter = ignoreDrag;
        dropBox.ondragover = ignoreDrag;
        dropBox.ondrop = drop;
    }

function ignoreDrag(e) {
    e.stopPropagation();
    e.preventDefault();
}

function drop(e) {
    e.stopPropagation();
    e.preventDefault();
    var data = e.dataTransfer;
    var files = data.files;
    processFiles(files);

}

// ----------------------------------------

function saveData() {
    var localData = document.getElementById("textBox").innerHTML;
    localStorage["lData"] = localData;
        alert(localData);

}

function loadData() {
    var localData = localStorage["lData"]; 
        if (localData != null) {
            document.getElementById("textBox").innerHTML = localData;
    }
}
</script>
    <div class="cuerpo container" style="margin-right: 200px;">
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <h1 style="font-weight: 800; text-align: center;">Redactar correo</h1> 
                        <br>
                        <br>
                        <br>
                        <br>        
                        <div class="container">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label style="font-size: 15px; margin-left: 293px;">Destinatarios</label><br />
                                    <input type="button" name="agregardes" id="agregardes" style="font-size: 15px; margin-left: 293px;" value="Agregar Destinatarios">
                                    <input style="margin-left: 293px;" id="email" name="email" type="text" class="form-control" required>
                                </div>
                            </div>
                            <section class="opciones">
                                <button onclick="document.execCommand('bold',false,'');">Negrita</button>
                                <button onclick="document.execCommand('italic',false,'');">Cursiva</button>
                                <button onclick="document.execCommand('underline',false,'');">Subrayado</button>
                                    <select onchange="formatoFuente('forecolor',this[this.selectedIndex].value);this.selectedIndex=0;">
                                        <option class="heading" selected>Color</option>
                                        <option value="red">Rojo</option>
                                        <option value="blue">Azul</option>
                                        <option value="green">Verde</option>
                                        <option value="black">Negro</option>
                                    </select>
                            </section>
                            <section class="opciones">
                                <button onclick="document.execCommand('justifyleft',false,'');">Izqda.</button>
                                <button onclick="document.execCommand('justifycenter',false,'');">Centro</button>
                                <button onclick="document.execCommand('justifyright',false,'');">Drcha.</button>
                                <button onclick="document.execCommand('cut',false,'');">Cortar</button>
                                <button onclick="document.execCommand('copy',false,'');">Copiar</button>
                                <button onclick="document.execCommand('paste',false,'');">Pegar</button>
                                <select onchange="formatoFuente('fontsize',this[this.selectedIndex].value);this.selectedIndex=0;">
                                    <option class="heading" selected>Fuente</option>
                                    <option value="1">Muy pequeña</option>
                                    <option value="2">Pequeña</option>
                                    <option value="3">Normal</option>
                                    <option value="4">Media</option>
                                    <option value="5">Grande</option>
                                    <option value="6">Muy grande</option>
                                    <option value="7">Enorme</option>
                                </select>
                            </section>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message" style="font-size: 15px;"></label>
                                <div class="col-md-6">
                                    <div id="textBox" contenteditable="true">
                                    </div>
                                </div>
                            </div>
                            <section class="opciones">
                                <input id="fileInput" type="file" onchange="processFiles(this.files)">
                            </section>
                            <div>
                                <input style="margin-left: 290px;" class="btn btn-primary" type="submit" name="enviar" value="Enviar">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>            
    <div class="bs-twrapper col-md-12" style="float: left; margin-top: -600px; margin-left: 100px;">   
        <div class="row">
            <div class="col-xs-12">
                <div class="input-group c-search">
                    <input type="text" class="form-control" id="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                    </span>
                </div>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <div style="float: left;">    
                        <?php foreach ($lclientes->result() as $row) {
                            echo "<tr>";
                                echo " <td><input type='checkbox' id='check' value=".$row->correo."></td>";
                                echo "<td style='font-size: 12px;'>".$row->nombre ."<br />". $row->correo."<br />".$row->observaciones."</td>";
                            echo "</tr>";
                            }
                        ?>
                </div>
            </table>
        </div>
    </div>
    <script type="text/javascript">
      /*  $(document).ready(function(){
            var consulta;
            //hacemos focus al campo de búsqueda
            $("#buscar").focus();
                                                                                                         
            //comprobamos si se pulsa una tecla
            $("#buscar").keyup(function(e){
                                          
                  //obtenemos el texto introducido en el campo de búsqueda
                  consulta = $("#buscar").val();
                  //hace la búsqueda                                                                                  
                  $.ajax({
                        type: "POST",
                        url: "http://localhost/correos/application/models/Mbuscar.php",
                        data: "b="+consulta,
                        dataType: "html",
                        beforeSend: function(){
                        //imagen de carga
                        $("#resultado").html("<p align='center'></p>");
                        },
                        error: function(){
                        alert("error petición ajax");
                        },
                        success: function(data){                                                    
                        $("#resultado").empty();
                        $("#resultado").append(data);                                                             
                        }
                  });                                                                         
            });                                                     
        }); */
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


    // Comprobar los checkbox seleccionados
    $('#agregardes').on('click', function() {

        var seleccion = new Array();

        $('input[type=checkbox]:checked').each(function() {
            seleccion.push($(this).val());
        });

        $("#email").val(seleccion);

    });

});
    </script>