<?php
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
    unset($_SESSION["loggein"]);
    echo "<script>window.location.href=\"http://localhost/localbrand/Contacts/login\"</script>";
}
echo "<script>window.location.href=\"http://localhost/localbrand/Contacts/login\"</script>";
// http://localhost/localbrand/Contacts/Logout
?>