<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php


    echo $_SERVER['REQUEST_METHOD'].'<br>';
    echo $_GET['fname'].'<br>';
    echo $_GET['lname'].'<br>';
    echo $_GET['country'].'<br>';



    ?>
    <form action="">
        <div>
            <h1 class="h1s">Registeration Form</h1>
            <label for="fname">First Name</label>
            <input type="text" id='fname' name="fname">

            <label for="lname">Last Name </label>
            <input type="text" id='fname' name="lname">

            <label for="fname">Country</label>
            <select name="country" id="country">
                <option value="Iraq">IRAQ</option>
                <option value="Finalnd">FINLAND</option>
                <option value="Turkey">TUREKY</option>
                <option value="EU">EU</option>

            </select>
            <button> Submit</button>
        </div>
    </form>

</body>

</html>