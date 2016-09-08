<?php
/**
 * Created by PhpStorm.
 * User: Raymond Phua
 * Date: 8-9-2016
 * Time: 09:16
 */

include 'Exercise.php';
include 'Student.php';

$status1 = ['To Do', 'Done', 'Done', 'In Progress', 'To Do'];
$status2 = ['Done', 'Done', 'Done', 'Help', 'In Progress'];
$status3 = ['Done', 'In Progress', 'To Do', 'To Do', 'To Do'];
$status4 = ['Help', 'To Do', 'To Do', 'To Do', 'To Do'];
$status5 = ['Done', 'Done', 'In Progress', 'Help', 'To Do'];

$exercises1 = array();
$exercises2 = array();
$exercises3 = array();
$exercises4 = array();
$exercises5 = array();

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise = new Exercise($num, 'Opdracht '.$num, $status1[$i]);
    array_push($exercises1, $exercise);
}

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise = new Exercise($num, 'Opdracht '.$num, $status2[$i]);
    array_push($exercises2, $exercise);
}

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise = new Exercise($num, 'Opdracht '.$num, $status3[$i]);
    array_push($exercises3, $exercise);
}

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise = new Exercise($num, 'Opdracht '.$num, $status4[$i]);
    array_push($exercises4, $exercise);
}

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise = new Exercise($num, 'Opdracht '.$num, $status5[$i]);
    array_push($exercises5, $exercise);
}

$student1 = new Student(1, "Jan", "Verhoeven", "4Ha");
$student1->setExercises($exercises1);

$student2 = new Student(2, "Ash", "Ketchum", "4Hb");
$student2->setExercises($exercises2);

$student3 = new Student(3, "Piet", "Klaassen", "4Hb");
$student3->setExercises($exercises3);

$student4 = new Student(4, "Nick", "van der Poel", "4He");
$student4->setExercises($exercises4);

$student5 = new Student(5, "Oliver", "Smith", "4Hf");
$student5->setExercises($exercises5);

$students = [$student1, $student2, $student3, $student4, $student5];
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="edit.php"  style="float: right; position: static" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"> Edit status</span></a>
        </div>
    </div>

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
                        <th><?= $student->getFullName(); ?></th>
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
