<?php
//postback1.php
//zero trigger false negative. $_ is something is SUPER GLOBAL 

//echo basename ($_SERVER['PHP_SELF']);
//die;

define('THIS_PAGE',basename ($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;
/*
' . THIS_PAGE . '
*/

if(isset($_POST['submit']))
{//data submitted
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}else{//show this form
    echo '
    <form method="post" action="' . THIS_PAGE . '">
    Number 1:<input type="text" name="number1" /><br />
    Number 2:<input type="text" name="number2" /><br />
    <input type="submit" name="submit" value="Submit It!" />
    </form>
    ';
}