<?php
// Get route of SPA so we can route manually
// TODO: implement transformation router
$url = $_SERVER['REQUEST_URI'];

// Load XML file
$xml = new DOMDocument();
$xml->load('cd.xml');

// Load XSL file
$xsl = new DOMDocument();
$xsl->load('catalog.xsl');

// Configure the transformer
$proc = new XSLTProcessor();

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?> 
