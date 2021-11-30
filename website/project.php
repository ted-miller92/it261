<?php $logo = 'images/logo.png'; ?>
<?php include('includes/header.php'); ?>

<div id="wrapper">
    <main>
        <h1><?php echo $headline; ?></h1>
<?php

$sql = 'SELECT * FROM cheeses';

// connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement - if there are more than 0 rows, good

if(mysqli_num_rows($result) > 0){
    //success, now while loop to loop through each row
    echo '<table>';
    echo '
    <tr>
        <th>Cheese Name</th>
        <th>Region of Origin</th>
        <th>More info</th>
    </tr>
    ';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        
        echo '<td><b>'.$row['cheese_name'].'</b></td>';
        echo '<td>'.$row['cheese_region'].'</td>';
        echo '<td>More on <a href="cheese-view.php?id='.$row['cheese_id'].' ">'.$row['cheese_name'].'</a>.</td>';
        echo '</tr>';
    }//end while
    echo '</table>';
}else{
    echo 'Problem fetching data';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<aside>
<h3>A little about Cheese</h3>
<p>Wow, that is delicious. Did you know it's even better melted?</p>
<p>Cheese is a culinary phenomenon that dates back centuries, and I like to think it started by someone forgetting the last gallon of milk in the back of the larder for a season.</p>
<p>People love it, and if they can't have it, they come up with all sorts of substitutes to try to replicate it.</p>
<p>From the Wikipedia page on Cheese,</p>
<blockquote>"Cheese is a dairy product, derived from milk and produced in wide ranges of flavors, textures and forms by coagulation of the milk protein casein. It comprises proteins and fat from milk, usually the milk of cows, buffalo, goats, or sheep." </blockquote>
<p></p>
</aside>

<?php include 'includes/footer.php'; ?>