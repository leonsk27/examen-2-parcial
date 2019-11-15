select
p.nombre,
count(d.id)
from
productos p join
detalles d on p.id = d.producto_id
group by p.id order by count(d.id) desc;

select
p.nombre
from
productos p join
detalles d on p.id = d.producto_id join
ventas v on d.venta_id = v.id join
clientes c on v.cliente_id = c.id
where
c.nombre = 'OLOVp5ElUM' group by p.id; 
HGS1Nloict
OLOVp5ElUM

select
clientes.nombre,
count(clientes.id)
from
clientes
group by clientes.ciudad
order by count(clientes.id)
asc limit 1;