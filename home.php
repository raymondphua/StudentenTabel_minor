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
$status6 = ['To Do', 'Done', 'Done', 'In Progress', 'To Do'];
$status7 = ['Done', 'Done', 'Done', 'Help', 'In Progress'];
$status8 = ['Done', 'In Progress', 'To Do', 'To Do', 'To Do'];
$status9 = ['Help', 'To Do', 'To Do', 'To Do', 'To Do'];
$status10 = ['Done', 'Done', 'In Progress', 'Help', 'To Do'];
$status11 = ['To Do', 'Done', 'Done', 'In Progress', 'To Do'];
$status12 = ['Done', 'Done', 'Done', 'Help', 'In Progress'];
$status13 = ['Done', 'In Progress', 'To Do', 'To Do', 'To Do'];
$status14 = ['Help', 'To Do', 'To Do', 'To Do', 'To Do'];
$status15 = ['Done', 'Done', 'In Progress', 'Help', 'To Do'];
$status16 = ['To Do', 'Done', 'Done', 'In Progress', 'To Do'];
$status17 = ['Done', 'Done', 'Done', 'Help', 'In Progress'];
$status18 = ['Done', 'In Progress', 'To Do', 'To Do', 'To Do'];
$status19 = ['Help', 'To Do', 'To Do', 'To Do', 'To Do'];
$status20 = ['Done', 'Done', 'In Progress', 'Help', 'To Do'];
$statusSlim = ['Done', 'Done', 'Done', 'Done', 'Done'];

$exercises1 = array();
$exercises2 = array();
$exercises3 = array();
$exercises4 = array();
$exercises5 = array();
$exercises6 = array();
$exercises7 = array();
$exercises8 = array();
$exercises9 = array();
$exercises10 = array();
$exercises11 = array();
$exercises12 = array();
$exercises13 = array();
$exercises14 = array();
$exercises15 = array();
$exercises16 = array();
$exercises17 = array();
$exercises18 = array();
$exercises19 = array();
$exercises20 = array();
$exercises21 = array();
$exercises22 = array();
$exercises23 = array();
$exercises24 = array();
$exercises25 = array();

for($i = 0; $i < 5; $i++)
{
    $num = $i+1;
    $exercise1 = new Exercise($num, 'Opdracht '.$num, $status1[$i]);
    array_push($exercises1, $exercise1);

    $exercise2 = new Exercise($num, 'Opdracht '.$num, $status2[$i]);
    array_push($exercises2, $exercise2);

    $exercise3 = new Exercise($num, 'Opdracht '.$num, $status3[$i]);
    array_push($exercises3, $exercise3);

    $exercise4 = new Exercise($num, 'Opdracht '.$num, $status4[$i]);
    array_push($exercises4, $exercise4);

    $exercise5 = new Exercise($num, 'Opdracht '.$num, $status5[$i]);
    array_push($exercises5, $exercise5);

    $exercise6 = new Exercise($num, 'Opdracht '.$num, $status6[$i]);
    array_push($exercises6, $exercise6);

    $exercise7 = new Exercise($num, 'Opdracht '.$num, $status7[$i]);
    array_push($exercises7, $exercise7);

    $exercise8 = new Exercise($num, 'Opdracht '.$num, $status8[$i]);
    array_push($exercises8, $exercise8);

    $exercise9 = new Exercise($num, 'Opdracht '.$num, $status9[$i]);
    array_push($exercises9, $exercise9);

    $exercise10 = new Exercise($num, 'Opdracht '.$num, $status10[$i]);
    array_push($exercises10, $exercise10);

    $exercise11 = new Exercise($num, 'Opdracht '.$num, $status11[$i]);
    array_push($exercises11, $exercise11);

    $exercise12 = new Exercise($num, 'Opdracht '.$num, $status12[$i]);
    array_push($exercises12, $exercise12);

    $exercise13 = new Exercise($num, 'Opdracht '.$num, $status13[$i]);
    array_push($exercises13, $exercise13);

    $exercise14 = new Exercise($num, 'Opdracht '.$num, $status14[$i]);
    array_push($exercises14, $exercise14);

    $exercise15 = new Exercise($num, 'Opdracht '.$num, $status15[$i]);
    array_push($exercises15, $exercise15);

    $exercise16 = new Exercise($num, 'Opdracht '.$num, $status16[$i]);
    array_push($exercises16, $exercise16);

    $exercise17 = new Exercise($num, 'Opdracht '.$num, $status17[$i]);
    array_push($exercises17, $exercise17);

    $exercise18 = new Exercise($num, 'Opdracht '.$num, $status18[$i]);
    array_push($exercises18, $exercise18);

    $exercise19 = new Exercise($num, 'Opdracht '.$num, $status19[$i]);
    array_push($exercises19, $exercise19);

    $exercise20 = new Exercise($num, 'Opdracht '.$num, $status20[$i]);
    array_push($exercises20, $exercise20);

    $exercise21 = new Exercise($num, 'Opdracht '.$num, $statusSlim[$i]);
    array_push($exercises21, $exercise21);

    $exercise22 = new Exercise($num, 'Opdracht '.$num, $statusSlim[$i]);
    array_push($exercises22, $exercise22);

    $exercise23 = new Exercise($num, 'Opdracht '.$num, $statusSlim[$i]);
    array_push($exercises23, $exercise23);

    $exercise24 = new Exercise($num, 'Opdracht '.$num, $statusSlim[$i]);
    array_push($exercises24, $exercise24);

    $exercise25 = new Exercise($num, 'Opdracht '.$num, $statusSlim[$i]);
    array_push($exercises25, $exercise25);
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

$student6 = new Student(6, "Jan", "Hentenaar", "4Ha");
$student6->setExercises($exercises6);

$student7 = new Student(7, "Britt", "Smith", "4Ha");
$student7->setExercises($exercises7);

$student8 = new Student(8, "Ryan", "Dough", "4Hb");
$student8->setExercises($exercises8);

$student9 = new Student(9, "John", "Doe", "4He");
$student9->setExercises($exercises9);

$student10 = new Student(10, "Jane", "Doe", "4Hc");
$student10->setExercises($exercises10);

$student11 = new Student(11, "Achmed", "Kebab", "4Hf");
$student11->setExercises($exercises11);

$student12 = new Student(12, "Pietje", "Puk", "4Hf");
$student12->setExercises($exercises12);

$student13 = new Student(13, "Kory", "Kosta", "4Hd");
$student13->setExercises($exercises13);

$student14 = new Student(14, "Denver", "Marshall", "4Hd");
$student14->setExercises($exercises14);

$student15 = new Student(15, "Velda", "Beus", "4Hc");
$student15->setExercises($exercises15);

$student16 = new Student(16, "Wilma", "Karle", "4Hn");
$student16->setExercises($exercises16);

$student17 = new Student(17, "Chloe", "Silberman", "4Hn");
$student17->setExercises($exercises17);

$student18 = new Student(18, "Earle", "Voll", "4Hm");
$student18->setExercises($exercises18);

$student19 = new Student(19, "Hans", "Zwart", "4Hk");
$student19->setExercises($exercises19);

$student20 = new Student(20, "Tim", "Goud", "4Hd");
$student20->setExercises($exercises20);

$student21 = new Student(21, "Jan", "Verhoeven", "4Ha");
$student21->setExercises($exercises21);

$student22 = new Student(22, "Ash", "Ketchum", "4Hb");
$student22->setExercises($exercises22);

$student23 = new Student(23, "Piet", "Klaassen", "4Hb");
$student23->setExercises($exercises23);

$student24 = new Student(24, "Nick", "van der Poel", "4He");
$student24->setExercises($exercises24);

$student25 = new Student(25, "Oliver", "Smith", "4Hf");
$student25->setExercises($exercises25);

$students = [$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10, $student11, $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20, $student21, $student22, $student23, $student24, $student25];
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
                        <th><?= $student->getFullName(). " ". $student->getClass(); ?></th>
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
