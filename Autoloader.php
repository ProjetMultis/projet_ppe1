<?php

namespace Essaie; //namespace : organiser les classes

class Autoloader
{
    static function register()
        {
            spl_autoload_register(array(__CLASS__, 'autoload')); //__CLASS__ recupere le nom de la  classe dynamiquement
            //spl_autolad_registrer : enregistre le nom de la fonction et est pratique pour en appeler plusieur dans des fichiers différent
        }

    static function autoload($class) //fonction pour appeler les classes
        {

            if(strpos($class, __NAMESPACE__ . '\\') === 0)//si on met le préfixe du namespace, strpos : cherche la position de la premiere occurence
            {
                $class = str_replace(__NAMESPACE__ . '\\', '', $class); //remplace le namespace par \\ puis le nom de la classe

                $class = str_replace('\\', '/', $class);


                require $class.'.php'; //require les classes

            }
        }

    //appelle du autoloader dans un fichier ex : Autoloader::register();

}
?>