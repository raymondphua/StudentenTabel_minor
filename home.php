<?php
/**
 * Created by PhpStorm.
 * User: Raymond Phua
 * Date: 8-9-2016
 * Time: 09:16
 */

include "data.php";

session_start();

//if (!isset($_SESSION['students']))
//{
//    $_SESSION['students'] = $students;
//}

if (isset($_POST) && !empty($_POST))
{
    $id = $_POST['id'];
    foreach($students as $editedStudent)
    {
        if ($editedStudent->getId() == $id)
        {
            foreach($_POST as $key => $value)
            {
                foreach($editedStudent->getExercises() as $exercise)
                {
                    if ($key == $exercise->getName())
                    {
                        if ($value != $exercise->getStatus())
                        {
                            $exercise->setStatus($value);
                        }
                    }
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Exercise 01</th>
                    <th>Exercise 02</th>
                    <th>Exercise 03</th>
                    <th>Exercise 04</th>
                    <th>Exercise 05</th>
                </tr>

                <?php
                foreach ($students as $student)
                {
                    ?>
                    <tr>
                        <th><a href="edit.php?id=<?= $student->getId(); ?>"><?= $student->getFullName(). " ". $student->getClass() . " "; ?></a></th>
                        <?php
                        foreach ($student->getExercises() as $ex)
                        {
                            switch ($ex->getStatus())
                            {
                                case "To Do":
                                    ?>
                                    <td class="danger">To do</td>
                                    <?php
                                    break;
                                case "Done":
                                    ?>
                                    <td class="success">Done</td>
                                    <?php
                                    break;
                                case "In Progress":
                                    ?>
                                    <td class="warning">In progress...</td>
                                    <?php
                                    break;
                                case "Help":
                                    ?>
                                    <td class="active">Need help <span class="glyphicon glyphicon-alert" aria-hidden="true"></span></td>
                                    <?php
                                    break;
                            }
                        }
                        ?>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>

</div>


</body>
</html>
