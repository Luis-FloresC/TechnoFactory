USE `bd_techno_factory`;
DROP procedure IF EXISTS `ListarProductos`;

DELIMITER $$
USE `bd_techno_factory`$$
CREATE PROCEDURE `ListarProductos` ()
BEGIN

select 
ROW_NUMBER() OVER(PARTITION BY p.idProducto) '#', 
p.nombreProducto 'nombre',
p.descripcionProducto 'descripcion',
m.descripcionModelo 'modelo',
ma.descripcionMarca 'marca',
c.descripcionCategoria 'categoria',
p.cantidadExistencia 'cantidad',
p.precioVenta 'precio',
e.estado 
from Productos p 
join Modelos m on m.idModelo = p.idModelo
JOIN Marcas ma on ma.idMarca = m.idMarca
join Categorias c on c.idCategoria = p.idCategoria
join Estados e on e.idEstado = p.idEstado;

END$$

DELIMITER ;
