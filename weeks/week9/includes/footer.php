<?php $currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
<footer>
            <ul>
                <li>Copyright &copy; <?php 
                    $date_current = date('Y');
                    $date_created = 2021;
                    if($date_created == $date_current){
                        echo $date_current;
                    }else{
                        echo ''.$date_created.' - '.$date_current.'';
                    }
                    ?>
                </li>
                <li>All Rights Reserved</li>
                <li><a href="http://www.scriptedmiller.com">Web Design by Ted Miller</a></li>
                <li><a href="">Terms of Use</a></li>
                <li><a href="https://validator.w3.org/nu/?doc=<?=$currentURL?>">HTML Validation</a></li>
                <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $currentURL?>">CSS Validation</a></li>
            </ul>
        </footer>

</body>
</html>