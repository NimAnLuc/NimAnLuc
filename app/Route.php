<?php
class Route
{
    public static function route_site()
    {
        $pathview = "views/frontend/";
        if (!isset($_REQUEST["option"])) {
            $pathview .="home.php";
        }else{
            $pathview .=  $_REQUEST["option"];
            if (!isset($_REQUEST["slug"])){
                $pathview .=  "-detai.php";
            }else{
                if (!isset($_REQUEST["cat"])){
                    $pathview .=  "-category.php";
            }else{
                $pathview .=   ".php";
            }
            }
        }
        require_once $pathview;
    }
}
public static function route_admin()
    {
        $pathview = "../views/backend/";
        if (!isset($_REQUEST["option"])) {
            $pathview .="dashboard/index.php";
        }else{
            $pathview .=  $_REQUEST["option"]."/";
                if (!isset($_REQUEST["cat"])){
                    $pathview .=  $_REQUEST["cat"]."php";
            }else{
                $pathview .=   "index.php";
            }
        }
        require_once $pathview;
}