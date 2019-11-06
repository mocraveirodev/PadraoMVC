<?php
    class homeController{

        public function acao($acao){
           switch ($acao) {
                case "home":
                    $this->viewHome();
                    break;
                default:
                    $this->viewHome();
           }
        }
        public function viewHome(){
            include "view/home.php";
        }
    }
?>