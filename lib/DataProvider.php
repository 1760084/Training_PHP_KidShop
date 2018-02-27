<?php
    class DataProvider {
        public static function ExecuteQuery($sql) {
            $connect = mysqli_connect('localhost', 'root', 'root', 'BabyShop') 
                or die('Cannot connect DB');
            mysqli_query($connect, "set names 'utf-8'");
            $result = mysqli_query($connect, $sql);
            mysqli_close($connect);
            return $result;
        }
        
        public static function ChangeURL($path)
        {
            echo '<script type = "text/javascript">';
            echo 'location = "'.$path.'";';
            echo '</script>';
        }
    }
?>