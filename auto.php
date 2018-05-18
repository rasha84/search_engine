<?php
include "connect.php";

if (isset($_GET['search_term'])){
    $return_arr = [];

    try {
        $stmt = $conn->prepare('SELECT * FROM person WHERE firstname LIKE :term');
        $stmt->execute(['term' => '%'.$_GET['search_term'].'%']);   

        while($data = $stmt->fetch()) {
           
            $return_arr[] = [
                'id' => $data['id'],
                'label' => $data['firstname'],
                'value' => $data['firstname']
            ];
    
        }

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    echo json_encode($return_arr);
}


?>