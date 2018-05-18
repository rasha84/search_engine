<?php
$serverName = 'localhost';
$userName = 'root';
$password = 'stagiaire';
$dbName = 'Famous_person';



    try {
        //create dtatbase 
        // $conn = new PDO("mysql:host=".$serverName,$userName , $password);
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql = "CREATE DATABASE Famous_person";
        // $conn-> exec($sql);
        // echo 'Database created successfuly<br>';
       
        $conn = new PDO ("mysql:host=".$serverName.";dbname=".$dbName, $userName, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'connect to database';

        // create person table
        // $sql = "CREATE TABLE person (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        //     firstname VARCHAR(30) NOT NULL,
        //     lastname VARCHAR(30) NOT NULL,
        //     job VARCHAR(20),
        //     country VARCHAR(30),
        //     age INT(3),
        //     webPage VARCHAR(100),
        //     gender VARCHAR (10)
        //     )";
        //     $conn->exec($sql);
        //     echo "Table Clients created successfully";


        // insert values into person table 7
        // $sql = "INSERT INTO person (firstname, lastname, job, country, age, webPage, gender)
        // VALUES ('jhonny','hallyday','singer', 'France', '60','https://en.wikipedia.org/wiki/Johnny_Hallyday', 'male')";
        // $prep = $conn->prepare($sql);
        // $prep->execute();
        // echo 'successful';

        // $sql = "INSERT INTO person (firstname, lastname, job, country, age, webPage, gender)
        // VALUES ('Dalida','Dalida','singer', 'France', '80','https://en.wikipedia.org/wiki/Dalida', 'female')";
        // $prep = $conn->prepare($sql);
        // $prep->execute();
        // echo 'successful';
                    
    }
    catch(PDOException $e){
        
        echo "Error : <br>" . $e->getMessage();
    }


?>