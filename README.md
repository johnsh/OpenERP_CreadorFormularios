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

'prueba_boolean' : fields.boolean('Prueba de boolean'),
'otro_boolean' : fields.boolean('Otro boolean'),
'imc' : fields.integer('Prueba de campo Integer'),
'frecuencia_cardiaca' : fields.integer('Frecuencia cardiaca'),
'frecuencia_cardiaca' : fields.datetime('Frecuencia cardiaca'),
'motivo_de_consulta' : fields.text('Motivo de consulta'),
'enfermedad_actual' : fields.text('Enfermedad Actual'),
'nueva_cosa' : fields.selection([(1, 'Primer valor'), (2, 'Segundo Valor')], 'Antecedentes'),
'diagnosticos' : fields.one2many('tabla', 'campo_relaci', 'Diagnosticos'),

