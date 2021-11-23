<?php include('config.php');
include('includes/header.php');
?>

<main>
<h1>Welcome to the Week 8 People Page Exercise</h1>
<?php

$sql = 'SELECT * FROM people';

// connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement - if there are more than 0 rows, good

if(mysqli_num_rows($result) > 0){
    //success, now while loop to loop through each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="peopleSegment">';
        echo '<ul>';
        echo '<li><b>'.$row['first_name'].' '.$row['last_name'].'</b></li>';
        echo '<li>'.$row['email'].'</li>';
        echo '</ul>';
        echo '<p>For more information about '.$row['last_name'].', click <a href="people-view.php?id='.$row['people_id'].' ">here</a>.</p>';
        echo '</div>'; //end .peopleSegment
    }//end while
}else{
    echo 'Problem fetching data';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<aside>
<h3>My Mystery Aside</h3>

</aside>
</div> <!-- end #wrapper-->

<?php include('includes/footer.php'); ?>