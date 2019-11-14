<?php

// you can change here the product price, title, and photos link
$price = 6299;
$title = "VTT electric Haibike Xduro";
$photos = array(
    "https://www.cyclable.com/33001-large_default_new/vtt-electrique-haibike-xduro-dwnhll-90.jpg",
    "https://www.velozen.com/7460-thickbox_default/vtt-electrique-haibike-xduro-dwnhll-90-2019.jpg",
    "https://www.velozen.com/7458-thickbox_default/vtt-electrique-haibike-xduro-dwnhll-90-2019.jpg"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Challenge Wizi Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<?php

if (isset($_COOKIE["quantityCart"])) {
    echo ("<body onload=\"window.location.hash = 'cart'\">");
} else {
    echo ("<body>");
}

?>
    <div class="bg">
        <div class="caption">
            <span class="border">EXPLORE</span><br>
            <br>
            <span class="border">YOUR LIMITS</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php

                        $index = 0;
                        while ($index < count($photos)) {
                            $tmp = "<div class=\"carousel-item ";
                            if ($index == 0) {
                                $tmp .= "active";
                            }
                            $tmp .= "\">
                                        <img class=\"d-block w-100\" src=\" " . $photos[$index] . " \" alt=\"slide " . $index . "\">
                                    </div>";
                            echo $tmp;
                            $index++;
                        }

                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm" style="text-align: center; padding-top: 10vh;">
                <div>
                    <h3><?php echo ($title); ?></h3>
                    <p class="price"><?php echo ($price); ?> €</p>
                    <form method="get" action="./handler.php">
                        <div>
                            <label for="quantity">Quantity: </label>
                            <input type="number" name="quantity" id="quantity" min="1" value="1" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add to cart !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5vh;">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque erat diam, quis tincidunt neque sollicitudin sit amet. Vestibulum nec elementum lorem, nec consectetur massa. Aenean dui mi, dictum id felis nec, pharetra vehicula ante. Suspendisse tempor justo sollicitudin libero luctus, nec rhoncus orci iaculis. Sed ut turpis tempus, varius nisl non, semper urna. In dignissim elit et eros interdum, id pharetra metus tincidunt. In hac habitasse platea dictumst. Quisque tempus, purus nec commodo placerat, risus est tincidunt felis, et cursus eros eros id mi. Suspendisse lacinia lectus egestas augue viverra feugiat sed vitae sem. Nullam malesuada nulla vel metus pretium, vel suscipit augue elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec lobortis mauris sit amet felis sodales, eget interdum magna consectetur. Morbi ac nisl dignissim, ullamcorper tellus sit amet, pellentesque nibh.
                <br><br>Sed ultrices et eros sit amet consequat. Nam tincidunt dui ac leo egestas sagittis. Phasellus imperdiet odio id justo interdum interdum. Aliquam ornare ipsum quis ligula mattis, ut vestibulum arcu suscipit. Duis purus nulla, malesuada ut tristique ac, convallis sit amet lectus. Cras mattis sollicitudin elit at placerat. Suspendisse at orci sit amet sapien vestibulum maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus et magna ac augue viverra feugiat. Mauris maximus diam interdum varius laoreet. Sed rutrum erat massa, vitae mattis orci porta at. Sed in aliquet neque. In a nulla sed urna convallis sollicitudin et nec ex. Nunc eu urna eu arcu egestas vulputate eu eu ante.</p>
        </div>
        <?php

        if (isset($_COOKIE["quantityCart"])) {
            echo ("
                        <div class=\"row\" style=\"margin-top: 5vh;\" id=\"cart\">
                            <h3><i class=\"fas fa-shopping-cart\"></i> Your cart :</h3>
                        </div>
                        <div class=\"row\" style=\"margin-top: 3vh;\">
                            <span style=\"font-weight: bold;\">" . $title . "</span>
                        </div>
                        <div class=\"row\" style=\"margin-top: 1vh;\">
                            <form method=\"get\" action=\"./handler.php\">
                                <div>
                                    <label for=\"quantityCart\">Quantity: </label>
                                    <input type=\"number\" name=\"quantityCart\" id=\"quantityCart\" min=\"0\" value=\"" . $_COOKIE["quantityCart"]  . "\" required><button type=\"submit\" class=\"btn btn-primary\" style=\"margin-left: 10px;\">Update cart</button>
                                </div>
                            </form>
                        </div>
                        <div class=\"row\" style=\"margin-top: 1vh; margin-bottom: 5vh;\">
                            <span class=\"price\">Total price : " . $price * $_COOKIE["quantityCart"] . " €</span><button type=\"submit\" class=\"btn btn-success\" style=\"margin-left: 10px;\">Purchase</button>
                        </div>");
        }

        ?>
    </div>
</body>

</html>