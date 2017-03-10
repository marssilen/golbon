<?php



?>
<!doctype html>
<html>
<head>
<title>Sign up</title>
<?php require 'app/views/head.php'; ?>
</head>

<body>
    <br>
    <div class="w3-padding">
<div class="w3-content w3-row w3-container w3-padding-16 w3-round w3-card-2">
    <div class="w3-col s12 l6 w3-padding ">
    <form method="post" enctype="multipart/form-data">
        <input class="w3-input w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="text" id="username" name="username" placeholder="Username"><br>
        <input class="w3-input w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="password" id="pass" name="pass" placeholder="Password"><br>
        <input class="w3-input w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="password" id="retype" name="retype" placeholder="Retype password"><br>
        <input class="w3-input w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="email" id="email" name="email" placeholder="Email"><br>
        <input class="w3-input w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="tel" id="phone" name="phone" placeholder="Phone"><br>
        <button class="w3-input w3-blue w3-round w3-border w3-border-blue w3-margin-2" style="padding: 5px" type="submit" name="submit" value="submit">Sign up</button>
        <br>
            <div class="w3-center"><a href="<?= URL ?>login">Login</a></div>
    </form>
    </div>
    <div class="w3-col l6 w3-hide-small w3-hide-medium  w3-padding ">
        <img class="w3-border w3-round" style="width:100%;" src="<?= URL ?>public/img_workshop.jpg"/>
    </div>
</div>
        </div>




<?php //print_r($data);?>
</body>
</html>
