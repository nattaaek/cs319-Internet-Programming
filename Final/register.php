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
        
        <div class="container">
                    <form action="regis_action.php" method="POST" role="form">
            <legend>ข้อมูลสำหรับลงทะเบียน</legend>
        
            <div class="form-group">
                <label for="">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>

            <div class="form-group">
                <label for="">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="">ภาควิชาที่สังกัด</label>
                <select name="department" id="input1/(\w+)/\u\1/g" class="form-control" required="required">
                <option value="cs">cs</option>
                <option value="it">it</option>
                <option value="se">se</option>
            </select>
            </div>
            
            <div class="form-group">
                <label for="">วิชาเอกบังคับ</label>
                <input type="text" class="form-control" id="one" name="one">
            </div>

            <div class="form-group">
                <label for="">วิชาเอกเลือก</label>
                <input type="text" class="form-control" id="two" name="two" size="4">
            </div>

            <div class="form-group">
                <label for="">วิชาเลือกเสรี</label>
                <input type="text" class="form-control" id="three" name="three">
            </div>

            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
        </div>
        

        

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
