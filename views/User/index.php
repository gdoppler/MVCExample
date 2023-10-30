<?php

// we have our model in $viewmodel - whatever is inside is defined by the controller method
// we know: $viewmodel is an array of user names

?>

<h1>Users</h1>
<ul>
    <?php
        foreach($viewmodel as $username){
            echo "<li>" . $username . "</li>";
        }
    ?>
</ul>





