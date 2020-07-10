<?php
$data = json_decode(stripslashes($_POST['data']));

switch($data['type']){
    case 'user':
        $_SESSION['user_data'] = array(
            'uid' => $data['data']['uid'],
            'username' => $data['data']['username'],
            'name' => $data['data']['name'],
            'paternal_surename' => $data['data']['paternal_surename'],
            'maternal_surename' => $data['data']['maternal_surename']
        );
    break;
}

?>