<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="css/movies.css" type="text/css">
<div id="wrapper">
    <main>
        <?php
        // assign SQL query to $sql variable
        $sql = 'SELECT * FROM movies';

        // connect to the database using mysqli_connect() function
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        // create a variable $result 
        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


        // if statement - if there are more than 0 rows, good
        if(mysqli_num_rows($result) > 0){
            //success, now while loop to loop through each row
            while($row = mysqli_fetch_assoc($result)) {
                $classColor = '';
                if($row['movie_id'] % 2 == 0){
                    $classColor = 'purple';
                } else {
                    $classColor = 'orange';
                }
                echo '<div class="movieSegment '.$classColor.'">';
                
                echo '<h5><a href="movie-view.php?id='.$row['movie_id'].' ">'.$row['movie_name'].'</a></h5>';
                echo '<p>'.$row['movie_year'].'</p>';
                
                echo '</div>'; //end .peopleSegment
            }//end while
        }else{
            echo 'Problem fetching data';
        }

        // close connection
        mysqli_free_result($result);
        mysqli_close($iConn);

        ?>
    </main>
</div><!-- end wrapper -->

<?php include('includes/footer.php'); ?>