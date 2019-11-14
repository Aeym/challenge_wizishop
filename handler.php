<?php
    // if the cart cookie is already set, we add the quuantity sent with the "Add to cart" button, else we create the cart cookie
    if (isset($_GET["quantity"])) {
        if (isset($_COOKIE["quantityCart"])) {
            setcookie("quantityCart", $_COOKIE["quantityCart"] + $_GET["quantity"], time()+60*60);
        } else {
            setcookie("quantityCart", $_GET["quantity"], time()+60*60);
        }
    }

    // we update the cart cookie, or delete it if the value sent with the "Update cart" button is 0
    if (isset($_GET["quantityCart"])) {
        if ($_GET["quantityCart"] == 0) {
            setcookie("quantityCart", 0, time() - 3600);

        } else {
            setcookie("quantityCart", $_GET["quantityCart"], time()+60*60);
        }
    }

    header("Location: index.php");

?>