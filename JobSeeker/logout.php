<?php
    session_start();
    session_destroy();
    session_abort();

    echo ('<script type="text/javascript">alert("You have been logged out!");window.location=\'../index.php\';</script>');
?>