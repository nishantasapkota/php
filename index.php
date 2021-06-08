<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>

<body>
    <?php
$name='';
$email='';
$gender='';
$lang='';
$country='';
if (!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $lang=$_POST['lang'];
    $country=$_POST['country'];
}
?>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">
                    <h1>Name</h1>
                </label>
                <input type="text" placeholder="name" name="name" id="name" />
            </div>
            <div class="form-group">
                <label for="email">
                    <h1>email</h1>
                </label>
                <input type="email" placeholder="email" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="gender">
                    <h1>Gender</h1>
                </label>
                <label><input type="radio" name="gender" value="male" />&nbsp; Male</label>
                <label><input type="radio" name="gender" value="female" />&nbsp;
                    Female</label>
            </div>
            <div class="form-group">
                <label for="language">
                    <h1>Language</h1>
                </label>
                <label><input type="checkbox" name="lang[]" value="nepali" />&nbsp;
                    Nepali</label>
                <label><input type="checkbox" name="lang[]" value="english" />&nbsp;
                    English</label>
                <label><input type="checkbox" name="lang[]" value="chinese" />&nbsp;
                    Chinese</label>
            </div>
            <div class="form-group">
                <label for="country">
                    <h1>Country</h1>
                </label>
                <select name="country" id="country" class="form-control">
                    <option disabled selected>---Select country---</option>
                    <option value="nepal">Nepal</option>
                    <option value="china">China</option>
                    <option value="us">US</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn" type="submit">Add Record</button>
            </div>
        </form>
        <div class="output">
            <h1><?=$name?></h1>
            <h1><?=$email?></h1>
            <h1><?=$gender?></h1>
            <h1><?=$lang[0]?></h1>
            <h1><?=$country?></h1>
        </div>
    </div>
</body>

</html>