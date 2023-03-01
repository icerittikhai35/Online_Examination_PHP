<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>รายงานผลคะแนน</title>
</head>

<body>
    <h2>เฉลยแบบทดสอบวิชาคอมพิวเตอร์เบื้องต้น พร้อมรายงานคะแนน</h2>
    <hr>
    <?php
     $link = mysqli_connect("localhost", "root");
     mysqli_set_charset($link, 'utf8');
     mysqli_select_db($link, "examination");
     $sql = "SELECT * FROM examination;";
     $result = mysqli_query($link, $sql);
     
    $sum = 0;
    $count = 0;
    while ($dbarr = mysqli_fetch_array($result)) {
        $no = $dbarr['No'];
        $index = "q$no";
        $ans = $dbarr['Answer'];

        if (empty($_POST[$index])) {
            echo "ข้อที่ $no. คุณไม่ได้ตอบเฉลย คือ $ans <br>";
            $_POST[$index] = "";
            $count++;
        } else {
            echo "ข้อที่ $no. ตอบ $_POST[$index] เฉลย คือ $ans <br>";
            $count++;
        }
        if ($_POST[$index] == $ans) {
            $sum++;
        }
    }
    echo"<hr>";
    echo "<br>สรุปคะแนนที่ได้ $sum/$count</b>";
    mysqli_close($link);
    ?>
</body>

</html>