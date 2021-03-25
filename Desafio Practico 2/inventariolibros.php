<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/inventario.css">
</head>


<body class="container">
    <section class="container">
        <nav class="navbar navbar-dark bg-dark text-white">
            <h1>Inventario de Libros</h1><br />
        </nav>
        <article>
            <form action="" method="POST">
                <br>
                <div class="form-group">
                    <label for="autor">AUTOR:</label>
                    <div>
                        <input type="text" name="autor" id="autor" size="25" maxlength="60"
                            class="inputField form-control" placeholder="Apellidos,Nombres" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="titulo">TÍTULO DEL LIBRO:</label>
                    <div>
                        <input type="text" name="titulo" id="titulo" size="25" maxlength="45"
                            class="inputField form-control" placeholder="Título del libro sin comillas" required>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="numeroedicion">NÚMERO DE EDICIÓN:</label>
                    <div>
                        <input type="number" name="numeroedicion" id="numeroedicion" size="4" maxlength="4"
                            class="inputField form-control" placeholder="Número de edición" required>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="lugarpublicacion">LUGAR DE LA PUBLICACIÓN:</label>
                    <div>
                        <input type="text" name="lugarpublicacion" id="lugarpublicacion" size="25" maxlength="30"
                            class="inputField form-control" placeholder="Ciudad donde se ha publicado el libro"
                            required >
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="editorial">EDITORIAL:</label>
                    <div>
                        <input type="text" name="editorial" id="editorial" size="20" maxlength="50"
                            class="inputField form-control" placeholder="Empresa que edita el libro" required >
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="añoedicion">AÑO DE EDICIÓN:</label>
                    <div>
                        <input type="text" name="añoedicion" id="añoedicion" size="6" maxlength="6"
                            class="inputField form-control" placeholder="Año de edición del libro entre paréntesis" required>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="numeropaginas">NÚMERO DE PÁGINAS:</label>
                    <div>
                        <input type="number" name="numeropaginas" id="numeropaginas" min="1" size="6" maxlength="8"
                            class="inputField form-control" placeholder="Cantidad de páginas que posee el libro"
                            required>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="notas">NOTAS:</label>
                    <div>
                        <textarea name="notas" id="notas" cols="5" rows="3" class="inputField form-control"
                            placeholder="Información complementaria como una edición facsímil, limitaciones de accesibilidad, etc." required></textarea>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <div> <input type="text" name="isbn" id="isbn" size="17" maxlength="17"
                            class="inputField form-control" placeholder="Número Internacional Normalizado del Libro 9781-86197-876-9"
                            required>
                    </div>
                </div>
                <br />
                <input type="submit" name="guardar" class="btn btn-dark mb-2" value="Guardar Nuevo Libro"
                    class="inputButton" />
                    
            </form>
            <br>
            <table class="table table-dark table-striped table-bordered table-hover">
                <thead class="thead-dark" colspan='9'>
                    <tr>
                        <th scope="col">Autor</th>
                        <th scope="col">Título</th>
                        <th scope="col">Número de edición</th>
                        <th scope="col">Lugar de Publicación</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Año de Edición</th>
                        <th scope="col">Número de Páginas</th>
                        <th scope="col">Notas</th>
                        <th scope="col">ISBN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $lista=array();
                      require "class/libro.class.php";
/*function __autoload($class_name) {
 include_once("class/" . $class_name . ".class.php");
}*/
    if(isset($_POST['guardar'])){
        require "expresiones.php";
        $autor = (isset($_POST['autor'])) ? $_POST['autor'] : "";
        $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
        $numeroedicion = (isset($_POST['numeroedicion'])) ? $_POST['numeroedicion'] : 0;
        $lugar = (isset($_POST['lugarpublicacion'])) ? $_POST['lugarpublicacion'] : "";
        $editorial =  (isset($_POST['editorial'])) ? $_POST['editorial'] : "";
        $añoedicion = (isset($_POST['añoedicion'])) ? $_POST['añoedicion'] : 0;
        $numeropaginas = (isset($_POST['numeropaginas'])) ? $_POST['numeropaginas'] : 0;
        $notas = (isset($_POST['notas'])) ? $_POST['notas'] : "";
        $isbn = (isset($_POST['isbn'])) ? $_POST['isbn'] : "";
        $añoedicion=año($añoedicion);
        $titulo=titulo($titulo);
        $isbn=isbn($isbn);
        $autor=autor($autor);
        $lugar=lugar($lugar);
        $editorial=editorial($editorial);
        if(!empty($editorial) && !empty($añoedicion) && !empty($titulo) && !empty($isbn) && !empty($autor) && !empty($lugar)){
            $nuevolibro=new Libro($autor,$titulo,$numeroedicion, $lugar,$añoedicion,$editorial,$numeropaginas,$notas,$isbn);
            array_push($lista,$nuevolibro);
            foreach ($lista as $valores) {
                $tabla = "<tr><td>" . $valores->getAutor(). "</td>";
                $tabla .= "<td>" . $valores->getTitulo(). "</td>";
                $tabla .= "<td>" . $valores->getNumeroEdicion(). "</td>";
                $tabla .= "<td>" . $valores->getLugar(). "</td>";
                $tabla .= "<td>" . $valores->getAño(). "</td>";
                $tabla .= "<td>" . $valores->getEditorial(). "</td>";
                $tabla .= "<td>" . $valores->getNumerosPaginas(). "</td>";
                $tabla .= "<td>" . $valores->getNotas(). "</td>";
                $tabla .= "<td>" . $valores->getISBN(). "</td></tr>";
                echo $tabla;
            } 
        }
        else{
            echo "<script type=\"text/javascript\">alert('Los datos ingresados no coinciden con los datos requeridos');</script>";
        }

        
         
    }
?>
                </tbody>
            </table>
        </article>
    </section>
</body>

</html>