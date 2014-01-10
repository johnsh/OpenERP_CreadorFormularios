<?php
// Templates Campos.

$tmpl = array();

$tmpl['tmpl_boolean'] = "'%' : fields.boolean('%')";

$tmpl_boolean = "'%' : fields.boolean('%')";
$tmpl_integer = "'%' : fields.integer('%')";
$tmpl_selection = "'%' : fields.selection('%', '%s')";
$tmpl_date = "'%' : fields.date('%')";
$tmpl_datetime = "'%' : fields.datetime('%')";
$tmpl_float = "'%' : fields.float('%', digits=%s)";
$tmpl_char = "'%' : fields.char('%')";

// Templates Views
$tmpl_field = '<field name="%" col="1"/>'
?>