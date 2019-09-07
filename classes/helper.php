
<?php
    require_once 'database.php';

    class helper{

        public static function Select($query){
            $result=Database::connect()->query($query);
            if($result->num_rows>0){
                return $result;
            }else{
                return false;
            }
        }


        public static function Insert($query){
            $result=Database::connect()->query($query);
            if($result){
                return true;
            }else{
                return false;
            }
        }

    }

