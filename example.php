<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="en_US">
<HEAD>
  <TITLE>Example implementation</TITLE>
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <META name="author" content="LOVD development team, LUMC, Netherlands">
  <META name="generator" content="PhpStorm @ GNU/Linux (Ubuntu)">
  <SCRIPT src="//code.jquery.com/jquery-1.10.2.js"></SCRIPT>
  <SCRIPT src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></SCRIPT>
  <LINK rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</HEAD>

<BODY style="margin : 10px;">

<?php
// Load the external view app.
require 'inc-init.php';

// Call for the full data view of the IVD gene using transcript ID 64, searching
//  for data owners with a name containing "Fokkema", and hiding some unused
//  columns, including the one we searched on.
$_LOVD->viewVariants('IVD', 64, array(
    'search' => array(
        'owned_by_' => 'Fokkema',
    ),
    'cols_to_skip' => array(
        'VariantOnGenome/ISCN' => 1,
        'VariantOnGenome/Segregation' => 1,
        'VariantOnGenome/Methylation' => 1,
        'owned_by_' => 1,
    ),
));

?>

</BODY>
</HTML>
