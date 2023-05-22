<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cdcom = intval($_POST["cdcom"]);
    $oldcgpa = floatval($_POST["oldcgpa"]);

    $lastsempoints = $cdcom * $oldcgpa;

    $c1_credit = 3;
    $c2_credit = 3;
    $c3_credit = 3;
    $c4_credit = 3;

    $c1_gpa = floatval($_POST["c1_gpa"]);
    $c2_gpa = floatval($_POST["c2_gpa"]);
    $c3_gpa = floatval($_POST["c3_gpa"]);
    $c4_gpa = floatval($_POST["c4_gpa"]);

    $p1 = $c1_credit * $c1_gpa;
    $p2 = $c2_credit * $c2_gpa;
    $p3 = $c3_credit * $c3_gpa;
    $p4 = $c4_credit * $c4_gpa;

    $recentpoints = $p1 + $p2 + $p3 + $p4;

    $res = $lastsempoints + $recentpoints;
    $newcd = $c1_credit + $c2_credit + $c3_credit + $c4_credit;

    $FINAL = $res / ($cdcom + $newcd);
    $CGPA = round($FINAL, 2);
    $FINAL_CGPA = number_format($CGPA, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexphp.css">
    <title>CGPA Calculator</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <p>Your CGPA is <?php echo $FINAL_CGPA; ?></p>
            <a href="index.html"><button type="submit">Calculate CGPA</button></a>
        </div>    
    </div>
</body>
</html>
<?php
}
?>