<?php
// Create a database connection
// host => 127.0.0.1 or localhost
// database name =>  star_rating
// database user => user ['write your database user name ']
// database password => password ['write your database password, if password is not set leave it blank "" ']
$connect = new PDO('mysql:host=127.0.0.1;dbname=star_rating','user','password');

if(isset($_POST['index']) && isset($_POST['product_id'])) {
    $query = "INSERT INTO rating(product_id, rating) VALUES(:product_id, :rating)";
    $statement = $connect->prepare($query);
    $statement->execute(
                    array(
                        ':product_id' => $_POST['product_id'],
                        ':rating' => $_POST['index']
                    )
                );
    $result = $statement->fetchAll();
    if(isset($result)) {
        echo 'done';
    }
}
?>
