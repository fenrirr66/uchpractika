<?php
    function query($sql){
        $conn = mysqli_connect('localhost', 'root', '', 'cinema_db');
        $response = mysqli_query($conn, $sql);
        return $response;
    }

    function location($url = '/') {
        header("Location: http://{$_SERVER['SERVER_NAME']}/$url");
        exit();
    }
    function debug($str){
        $_SESSION['debug'] = "<script>console.log(`$str`)</script>";
    }
    function alert($str){
        $_SESSION['alert'] = "<script>alert('$str')</script>";
    }
    function _count($obj){
        $counter = 0;
        if(!$obj){return 0;}
        while($row = $obj -> fetch_assoc()){
            $counter++;
        }
        return $counter;
    }
?>