<?php
/**
 * init.autoload.php
 *
 * Autloader des classes PHP de l'application MCO Scheduler.
 *
 * @author    Nicolas DUPRE
 * @release   01/10/2017
 * @version   1.0.0
 * @package   Index
 * @require   prepends/setup.const.document_root.php
 */

/**
 * Recherche la classe non déclarée dans l'emplacement configuré dans etc/app.settings.json.
 *
 * @param string $engine Classe appelée non déclarée à rechercher.
 *
 * @return bool
 */
function autoloader($engine)
{
    /** @var string $engine Remplace l'antislash par un slash permettant le chemin vers le fichier */
    $engine = str_replace("\\", "/", $engine);

//    $repository = (preg_match("#^\/#", PATH_PHP_CLASSES))
//        ? PATH_PHP_CLASSES
//        : __ROOT__ . '/' . PATH_PHP_CLASSES;
    $repository = "lib/classes";

    $full_path = $repository . '/' . $engine . '.php';

    if (file_exists($full_path)) {
        require_once $full_path;
        return true;
    } else {
        return false;
    }
}

/**
 * Enregistrement de la fonction dans la pile SPL.
 */
spl_autoload_register('autoloader');
