<?php include('includes/header.php'); ?>

<div id="wrapper">
    <div id="hero">
    
    </div> <!--end hero-->
    <main class="fullWidth">
        <table>
<?php

$sql = 'SELECT * FROM cocktails';

// connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement - if there are more than 0 rows, good

if(mysqli_num_rows($result) > 0){
    //success, now while loop to loop through each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
            echo '<td><h3>'.$row['cocktail_name'].'</h3></td>';
            echo '<td><img class="cocktail" src="images/cocktails/'.$row['cocktail_name'].'.jpg" alt="'.$row['cocktail_name'].'"></td>';
            echo '<td>'.$row['cocktail_description'].'</td>';
            echo '<td><img class="cocktail" src="images/cocktails/'.$row['cocktail_glass'].'.jpg" alt="'.$row['cocktail_glass'].'"></td>';
        echo '</tr>';
       
    }//end while
}else{
    echo 'Problem fetching data';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</table>
</main>

<?php include('includes/footer.php'); ?>