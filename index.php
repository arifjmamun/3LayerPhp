<?php
    session_start();

    spl_autoload_register(function($name){
        require_once str_replace('\\','/',$name).'.php';
    });

    use BLL\PersonManager;

    $_manager = new PersonManager();
    if(isset($_SESSION['status'])){
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="CodeBehind/PersonLogic.php" method="post">
    <table cellpadding="5" cellspacing="0" border="0">
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td><label for="phoneNo">Phone No.</label></td>
            <td><input type="text" name="phoneNo" id="phoneNo"></td>
        </tr>
        <tr>
            <td><label for="email">Email </label></td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="address">Address</label></td>
            <td><textarea name="address" id="address"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" id="submitBtn" name="submitBtn"></td>
        </tr>
    </table>
</form>
<br>
<br>
<table cellpadding="10" cellspacing="0" border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $persons = $_manager->GetAllPerson();
            if(!empty($persons))
            {
                foreach ($persons as $person)
                {
                    echo
                    '<tr>'.
                            '<td>'.$person->getName().'</td>'.
                            '<td>'.$person->getPhoneNo().'</td>'.
                            '<td>'.$person->getEmail().'</td>'.
                            '<td>'.$person->getAddress().'</td>'.
                            '<td><a href="http://localhost/Object/index.php?Id='.$person->getId().'">Edit</a></td>'.
                    '</tr>';
                }
            }
        ?>
    </tbody>
</table>
</body>
</html>