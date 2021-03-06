<?php
/**
 * Created by PhpStorm.
 * User: paisanrietbroek
 * Date: 08/09/16
 * Time: 11:42
 */

session_start();
//$students = $_SESSION['students'];
include 'data.php';
if (isset($_GET))
{
    $studentId = $_GET['id'];
    foreach ($students as $student)
    {
//        var_dump($test);
        if ($student->getId() == $studentId)
        {
            $currentStudent = $student;
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit page</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <![endif]-->
<style>
    .wrapper {
        max-width: 400px;
        margin: 0 auto;
    }
</style>
</head>
<body>

<div class="container-fluid">

    <div class="wrapper">
        <div class="row">
            <div class="col-sm-10"><h1><?= $currentStudent->getFullName(); ?></h1></div>
            <div class="col-sm-2">
                <a href="home.php" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-list" aria-hidden="true"> Overview</span></a>
            </div>
        </div>
<div class="row">
    <form action="home.php" method="post">
        <div class="form-group">

            <?php
                foreach ($currentStudent->getExercises() as $ex)

                {
                    ?>
                    <input type="hidden" name="id" value="<?= $currentStudent->getId(); ?>">
                    <div class="row">

                        <div class="col-sm-3">
                            <label><?= $ex->getName(); ?></label>
                        </div>

                        <?php
                        switch ($ex->getStatus())
                        {
                            case "To Do":
                                ?>
                                <div class="col-sm-6">
                                    <select name="<?= $ex->getName(); ?>" class="form-control">
                                        <option value="Help">Help</option>
                                        <option value="To Do" selected>To Do</option>
                                        <option value="In Progress">In progress...</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>
                                <?php
                                break;
                            case "Done":
                                ?>
                                <div class="col-sm-6">
                                    <select name="<?= $ex->getName() ?>" class="form-control">
                                        <option value="Help">Help</option>
                                        <option value="To Do">To Do</option>
                                        <option value="In Progress">In progress...</option>
                                        <option value="Done" selected>Done</option>
                                    </select>
                                </div>
                                <?php
                                break;
                            case "In Progress":
                                ?>
                                <div class="col-sm-6">
                                    <select name="<?= $ex->getName() ?>" class="form-control">
                                        <option value="Help">Help</option>
                                        <option value="To Do">To Do</option>
                                        <option value="In Progress" selected>In progress...</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>
                                <?php
                                break;
                            case "Help":
                                ?>
                                <div class="col-sm-6">
                                    <select name="<?= $ex->getName() ?>" class="form-control">
                                        <option value="Help" selected>Help</option>
                                        <option value="To Do">To Do</option>
                                        <option value="In Progress">In progress...</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>
                                <?php
                                break;
                        }
                        ?>

                    </div>
                    <?php
                }
            ?>

        </div>


        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
