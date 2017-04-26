
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "mysql";
        $dbname = "Final15";

        $conn = mysqli_connect($serverName, $userName, $password, $dbname);

        $id =  $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $total = ($one*2000) + ($two*1700) + ($three*1200);
        $four = $one + $two + $three;
        


        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());        
            }

        mysqli_set_charset($conn,"utf8");
        $sql1 = "INSERT INTO registration (id, gitchoose, gitbangkub, gitfreedom, total)
VALUES ($id, $one, $two, $three, $total)";

        if (mysqli_query($conn, $sql1)) {
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
        
        $sql2 =  "INSERT INTO profile (id, fullname, email, department)
VALUES ($id, '$name', '$email', '$department')";
        if (mysqli_query($conn, $sql2)) {
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }

        ?>

        <div class="container">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <p>รหัสนักศึกษา: <?php echo $id;?></p>
        </div>
       
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <p>รวมทั้งหมด <?php echo $four; ?> หน่วยกิต </p>
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <p>จำนวนเงินที่ต้องชำระค่าหน่วยกิต: <?php echo $total; ?> บาท</p>
            </div>
      
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>ข้อมูลของคุณ <?php echo $name; ?> ได้ถูกบันทึกลงในฐานข้อมูลเรียบร้อยแล้ว</p>
        </div>
        
        
           
            

        </div>
        

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
