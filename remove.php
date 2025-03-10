<?php
    if (isset($_POST['remove_all'])){
            unset($_SESSION['cart']);
            echo "<script>window.location = 'cart.php'</script>";
        }
?>