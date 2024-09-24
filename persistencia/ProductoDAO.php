<?php
class ProductoDAO {
    private $idProducto;
    private $nombre;
    private $cantidad;
    private $precioCompra;
    private $precioVenta;
    
    public function __construct($idProducto=0, $nombre="", $cantidad=0, $precioCompra=0, $precioVenta=0) {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
    }

    public function consultarTodos() {
        return "
            SELECT p.idProducto, p.nombre, p.cantidad, p.precioCompra, p.precioVenta, m.nombre AS marca, c.nombre AS categoria
            FROM Producto p
            JOIN Marca m ON p.Marca_idMarca = m.idMarca
            JOIN Categoria c ON p.Categoria_idCategoria = c.idCategoria
            ORDER BY p.nombre ASC
        ";
    }
    
}
?>