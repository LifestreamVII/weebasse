<?php

session_start();

if (isset($_SESSION['username']) ) {
     print "Active";
}
else {
     print "Expired";
}

?>