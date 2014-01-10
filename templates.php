<?php
// Templates Campos.

$tmpl_campos = array();

$tmpl_campos['b'] = "'%s' : fields.boolean('%s'),";
$tmpl_campos['i'] = "'%s' : fields.integer('%s'),";
$tmpl_campos['s'] = "'%s' : fields.selection('%s', '%s'),";
$tmpl_campos['d'] = "'%s' : fields.date('%s'),";
$tmpl_campos['dt'] = "'%s' : fields.datetime('%s'),";
$tmpl_campos['f'] = "'%s' : fields.float('%s', digits=%s),";
$tmpl_campos['c'] = "'%s' : fields.char('%s'),";

// Templates Views
$tmpl_view = array();

$tmpl_view['field'] = '<field name="%s" col="1"/>';

?>