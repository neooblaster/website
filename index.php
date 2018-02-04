<?php
/**
 * File :: index.php
 *
 * Main Interface
 *
 * @author    Nicolas DUPRE
 * @release   04/02/2018
 * @version   1.0.0
 * @package   Index
 *
 *
 *
 * Version 1.0.0 : 04/02/2018 : NDU
 * -------------------------------
 *
 *
 */


require_once "init/init.autoload.php";

require_once "lib/classes/Template.php";

$moteur = new Template\Template();
$moteur->set_template_file("lib/templates/index.master.tpl.html");
$moteur->set_output_name("index.html");
$moteur->set_temporary_repository("tmp");
$moteur->render()->display();
