<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>รายงานผลคะแนน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h2 >เฉลยแบบทดสอบวิชาคอมพิวเตอร์เบื้องต้น พร้อมรายงานคะแนน</h2>
    </div>
    
    <div class="container">
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
                echo "<div class=text-danger>ข้อที่ $no. คุณไม่ได้ตอบเฉลย คือ $ans <br></div>";
                $_POST[$index] = "";
                $count++;
            } else {
                echo "<div>ข้อที่ $no. ตอบ $_POST[$index] เฉลย คือ $ans <br></div>";
                $count++;
            }
            if ($_POST[$index] == $ans) {
                $sum++;
            }
            echo "<hr>";
        }
     
        echo "<div class=text-primary><br>สรุปคะแนนที่ได้ $sum/$count</b></div>";
        echo "<hr>";
        mysqli_close($link);
        ?>
    </div>
</body>

</html>