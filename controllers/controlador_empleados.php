<?php
include_once("models/empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados {

   public function inicio() {

      $empleados = Empleado::consultar();

      include_once("views/empleados/inicio.php");
   }

   public function crear() {

      if($_POST){

         print_r($_POST);
         $nombre = $_POST['nombre'];
         $correo = $_POST['correo'];
         Empleado::crear($nombre, $correo);
         header('Location: ./?controlador=empleados&accion=inicio');

      }
      include_once("views/empleados/crear.php");   
   }

   public function editar() {
      
      if ($_POST) {
         $id = $_POST["id"];
         $nombre = $_POST["nombre"];
         $correo = $_POST["correo"];
         
         Empleado::editar($id, $nombre, $correo);
         header('Location: ./?controlador=empleados&accion=inicio');

      }
      
      $id = $_GET["id"];
      $empleado = Empleado::buscar($id);
      include_once("views/empleados/editar.php");
   }

   public function borrar() {
      print_r($_GET);
      
      // Podemos validar de muchas formar este id
      $id = $_GET["id"];
      Empleado::borrar($id);
      header('Location: ./?controlador=empleados&accion=inicio');
   }

}