<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Abu Yousuf Tamzid</title>
</head>

<body>
    <?php
    include_once 'add.php';
    ?>

    <div class="card">
        <h1>Module 5 Assignments</h1>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"><br>

            <label for="name">Email:</label>
            <input type="email" name="email" id="email"><br>

            <button type="submit" name="submit">Submit</button>

        </form>
        <br><br><br>
        <span>Name:
            <?php echo $classPerson->getName(); ?>
        </span> <br>

        <span>Email:
            <?php echo $classPerson->getEmail(); ?>
        </span> <br>

    </div>

</body>

</html>