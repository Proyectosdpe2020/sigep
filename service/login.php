<?php
session_start();
include('connection.php');

$data = json_decode($_POST['auth'], true );

$user = $data['username'];
$pass = $data['password'];

if($conn){
    $sql = "SELECT TOP (1)
        * 
        FROM [sigep].[dbo].[usuario] 
        WHERE [usuario] = '$user'
        AND [contrasena] = '$pass'";

    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $result = sqlsrv_query( $conn, $sql , $params, $options );

    $row_count = sqlsrv_num_rows( $result );

    $json = '';
    $return = array();

    if ($row_count != 0){
        while( $row = sqlsrv_fetch_array( $result) ) {
            $json = json_encode($row);
        }
        
        $json = json_decode($json, true);
            
        $return = array(
            'state' => 'user_success',
            'user_data' => array(
                'uid' => $json['uid'],
                'username' => $json['usuario'],
                'name' => $json['nombre'],
                'paternal_surename' => $json['a_paterno'],
                'maternal_surename' => $json['a_materno']
            )
        );
        
    }
    else{
        $return = array(
            'state' => 'user_fail',
            'user_data' => false
        );
    }

    echo json_encode($return, JSON_FORCE_OBJECT);

    sqlsrv_close($conn);
}
else{
    $return = array(
        'state' => 'connection_fail',
        'user_data' => false
    );

    echo json_encode($return, JSON_FORCE_OBJECT);
}

?>