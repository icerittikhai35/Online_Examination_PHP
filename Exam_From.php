<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>ฟอร์มข้อสอบออนไลน์</title>
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h2>แบบทดสอบวิชาความรู้เบื้องต้นทางคอมพิวเตอร์</h2>
    </div>
    <div class="container">

        <?php
        $link = mysqli_connect("localhost", "root");
        mysqli_set_charset($link, 'utf8');
        mysqli_select_db($link, "examination");
        $sql = "SELECT * FROM examination;";
        $result = mysqli_query($link, $sql);
        ?>

        <form action="exam_check.php" method="post">
            <?php
            while ($dbarr = mysqli_fetch_array($result)) {
                $no = $dbarr['No'];
                $question = $dbarr['Question'];
                $choice1 = $dbarr['Choice1'];
                $choice2 = $dbarr['Choice2'];
                $choice3 = $dbarr['Choice3'];
                $choice4 = $dbarr['Choice4'];

                echo "<b>ข้อที่ $no.$question ? </b><br><br>\n";

                echo "<input class=form-check-input type=radio name=$no value=1>\n&nbsp;$choice1<br><br>\n";
                echo "<input class=form-check-input type=radio name=$no value=2>\n&nbsp;$choice2<br><br>\n";
                echo "<input class=form-check-input type=radio name=$no value=3>\n&nbsp;$choice3<br><br>\n";
                echo "<input class=form-check-input type=radio name=$no value=4>\n&nbsp;$choice4<br><br><br>\n";
                echo "<hr>";
            }
            ?>
            <p>
                <input type="submit" Name="submit" Value="ส่งคำตอบ" class="btn btn-primary">
                <input type="reset" Name="reset" Value="ยกเลิก" class="btn btn-danger">
            </p>

        </form>
        <?php
        mysqli_close($link);
        ?>
    </div>

</body>

</html>