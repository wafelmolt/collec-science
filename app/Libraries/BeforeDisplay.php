<?php

namespace App\Libraries;

use Ppci\Libraries\PpciLibrary;
use Ppci\Libraries\Views\SmartyPpci;

class BeforeDisplay extends PpciLibrary
{
    static function index() {}
    static function setGeneric(SmartyPpci $vue) {
        if (!empty($_SESSION["moduleListe"])){
            $vue->set($_SESSION["moduleListe"], "moduleListe");
        }
        if (isset($_REQUEST["activeTab"])) {
            $vue->set($_REQUEST["activeTab"], "activeTab");
        }
    }
}
