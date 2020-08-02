<?php
// Create a database connection
// host => 127.0.0.1 or localhost
// database name =>  star_rating
// database user => user ['write your database user name ']
// database password => password ['write your database password, if password is not set leave it blank "" ']
$connect = new PDO('mysql:host=127.0.0.1;dbname=star_rating','user','password');

$query = "SELECT * FROM products ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$output = '';

foreach($result as $row) {
    $rating = count_rating($row['id'], $connect); 
    $color = '';
    
    $output .='
                <h3 class="text-primary">'.$row['product_name'].'</h3>
                <ul 
                    class="list-inline"
                    data-rating="'.$rating.'"
                    title="Average Rating - '.$rating.'">
            ';
    for($count=1; $count<=5; $count++) {
        
        if($count <= $rating) {
            $color = 'color:#ffcc00;';
        } else {
            $color = 'color:#ccc;';
        }
        
        $output .='
                    <li 
                        title="'.$count.'"
                        id="'.$row['id'].'-'.$count.'"
                        data-index="'.$count.'"
                        data-product_id="'.$row['id'].'"
                        data-rating="'.$rating.'"
                        class="rating"
                        style="cursor:pointer; '.$color.' font-size:16px;">
                        &#9733;
                    </li>
                ';
        
    }
    
    $output .='
                </ul>
                <label class="text-danger">'.$row["company"].'</label>
                <hr />
            ';
}

echo $output;

// Create a function count_rating
function count_rating($product_id, $connect){
    $output = 0;
    $query = "SELECT AVG(rating) as rating FROM rating WHERE product_id='".$product_id."' ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    
    if($total_row > 0) {
        foreach($result as $row) {
            $output = round($row["rating"]);
        }
    }
    
    return $output;
}
?>
