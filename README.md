OpenERP CreadorFormularios
==========================

OpenERP - Permite crear formularios rapidamente.

Datos.txt
=========

Definicion de campos

b (Boolean)
s (Selection)
t (Text)
d (Date)
dt(Datetime)
i (Integer)
f (Float)
c (Char)
fu(Function)
o2m (One2many)
m2o (Many2one)


Ejemplo de definicion de datos

b;auto;Electro Terapia

dt;auto;Fecha Terapia y hora

s;cuello_fuerza_muscular;Fuerza Muscular;[(1,'5'),(2,'4+'),(3,'4'),(5,'3+'),(6,'3'),(7,'2+'),(8,'2'),(9,'1'),(10,'1+'),(11,'0')]

t;auto;Edema Observaciones:

m2o;auto;Medico Tratante;delphos.terceros.medico