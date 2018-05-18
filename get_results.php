<?php
include "connect.php";

if(isset($_POST['search_term']))
{
    $search_val = $_POST['search_term'];
    $sql = $conn->prepare("SELECT * FROM person WHERE firstname LIKE :search OR lastname LIKE :search");

    $sql->execute([
        'search' => "%".$_POST['search_term']."%"
    ]);

    $return_arr = [];
    while ($data = $sql->fetch()){
        $return_arr[] = [
            'id' => $data['id'],
            'firstname' => $data['firstname'],
            'lastname' => $data['firstname'],
            'job' => $data['job'],
            'country' => $data['country'],
            'age' => $data['age'],
            'gender' => $data['gender']
        ];
    }
    echo json_encode($return_arr);


    // echo '<table>
    // <th>FirstName </th>
    // <th> LastName</th>
    // <th>job</th>
    // <th>Country<th>
    // <th> Age</th>
    // <th> Gender</th>';
      
    //while ($data = $sql->fetch()){
    // {
    //     echo'<tr>
    //               <td>'. $data['firstname'].'</td>
    //               <td>'. $data['lastname'].' </td>
    //               <td>'. $data['job'].' </td>
    //               <td>'. $data['country'].' </td>
    //               <td>'. $data['age'].' </td>
    //               <td>'. $data['gender'].' </td>
                  
    //         </tr>';
    // }
    // echo '</table>';
}


?>