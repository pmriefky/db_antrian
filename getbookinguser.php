<?php
    include_once('config/koneksi.php');
    header('Content-Type: application/json');


    class emp{

    }

    $email = $_POST['email'];
    $token = $_POST['token'];

    $query = "SELECT * FROM tb_user WHERE email = '$email' AND token = '$token'";
    $row = mysqli_fetch_array(mysqli_query($conn, $query));

    if($row){
        $query = "SELECT * FROM tb_bookinglist WHERE email = '$email'";
        $hasil = mysqli_query($conn, $query);

        if($row = mysqli_fetch_array($hasil)){
            $response = new emp();
            $response1 = new emp();
            $response1->nama = $row['kode_service'];
            $response1->no_hp = $row['email'];
            $response1->email = $row['date'];

            $response->status="200";
            $response->message="Succes Fetch Data";
            $response->data=$response1;
            die(json_encode($response));
        }else{
            $response = new emp();
            $response->status="400";
            $response->message="Failed Fetch Data";
            die(json_encode($response));
        }
    }else{
        $response = new emp();
        $response->status="400";
        $response->message="Infalid Token";
        die(json_encode($response));
    }

?>