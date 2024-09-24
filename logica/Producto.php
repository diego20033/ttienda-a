<?php
require_once ("./persistencia/Conexion.php");
require_once ("./persistencia/ProductoDAO.php");
require_once ("./persistencia/MarcaDAO.php");

class Producto {
    private $idProducto;
    private $nombre;
    private $cantidad;
    private $precioCompra;
    private $precioVenta;
    private $marca;  
    private $categoria; 

    public function __construct($idProducto=0, $nombre="", $cantidad=0, $precioCompra=0, $precioVenta=0, $marca="", $categoria="") {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
        $this->marca = $marca; 
        $this->categoria = $categoria;
    }

    
    public function getMarca() {
        return $this->marca;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function consultarTodos() {
        $productos = array();
        $conexion = new Conexion();
        $conexion->abrirConexion();
        
        $productoDAO = new ProductoDAO();
        $marcaDAO = new MarcaDAO();
        
       
        $conexion->ejecutarConsulta($productoDAO->consultarTodos());

       
        while ($registro = $conexion->siguienteRegistro()) {
            $producto = new Producto($registro[0], $registro[1], $registro[2], $registro[3], $registro[4]);

          
            $conexion->ejecutarConsulta($marcaDAO->consultarPorId($registro[5]));
            $marcaRegistro = $conexion->siguienteRegistro();
            $producto->marca = $marcaRegistro[1];  
            
            array_push($productos, $producto);
        }

        $conexion->cerrarConexion();
        return $productos;
    }
}
?>