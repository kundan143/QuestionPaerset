<?php 
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "icloudems";
    $con = mysqli_connect($host, $username, $pass,$db );
    if(isset($_POST['added']))
    {
        $courseCode=$_POST['courseCode'];
        $courseTitle=$_POST['courseTitle'];
        $courseCredit=$_POST['courseCredit'];
        $courseType=$_POST['courseType'];
        $class=$_POST['class'];
        $division=$_POST['division'];
        $batch=$_POST['batch'];
        $questionNumber=strip_tags($_POST['questionNumber']);
        $query="INSERT INTO addquestion (courseCode,courseTitle,courseCredit,courseType,class,division,batch,questionNumber) VALUES ('$courseCode',' $courseTitle','$courseCredit','$courseType','$class','$division','$batch','$questionNumber')";
        
        $queryRun = mysqli_query($con,$query);
        if($queryRun)
        {
            // alert("Question has added succesfully !")
            echo '<script type="text/javascript"> alert("Question has added succesfully !") </script>';
        }
        else{
            echo "kumar";
        }
    }
     
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Examination</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/index.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <a href="./index.php"><img src="cloudems-logo.png"></a>
            <p>A Unique comprehensive Cloud based Education Management System EMS & LMS</p> 
        </div>
        <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"href="#">My profile</a>
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link"href="">logout</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container-fluid">
            <a href="./index.php"><i class='fas fa-home' style='font-size:24px'></i></a>
            <h1>Question Bank</h1>
        </div> 
        <form action="" method="POST">
            <div class="shadow p-3 mb-5 bg-white rounded" style="margin: 70px">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="table-responsiave">
                        <table class="table table-bordered" style="text-align: center;">
                            <thead style="background-color: #f3eff0">
                                <tr>
                                    <th rowspan="2">S.N.</th>
                                    <th colspan="4">Course Details</th>
                                    <th rowspan="2">Class</th>
                                    <th rowspan="2">Division</th>
                                    <th rowspan="2">Batch</th>
                                </tr>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Course Credit</th>
                                    <th>Course Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text"  name="id"           readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['id']) && $_REQUEST['id'] !='') {echo $_REQUEST['id'];}  ?>"></td>
                                    <td><input type="text"  name="courseCode"   readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseCode']) && $_REQUEST['courseCode'] !='') {echo $_REQUEST['courseCode'];}  ?>"></td>
                                    <td><input type="text"  name="courseTitle"  readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseTitle']) && $_REQUEST['courseTitle'] !='') {echo $_REQUEST['courseTitle'];}?>"></td>
                                    <td><input type="text"  name="courseCredit" readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseCredit']) && $_REQUEST['courseCredit'] !='') {echo $_REQUEST['courseCredit'];} ?>"></td>
                                    <td><input type="text"  name="courseType"   readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseType']) && $_REQUEST['courseType'] !='') {echo $_REQUEST['courseType'];} ?>"></td>
                                    <td><input type="text"  name="class"        readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['class']) && $_REQUEST['class'] !='') {echo $_REQUEST['class'];} ?>"></td>
                                    <td><input type="text"  name="division"     readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['division']) && $_REQUEST['division'] !='') {echo $_REQUEST['division'];} ?>"></td>
                                    <td><input type="text"  name="batch"        readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['batch']) && $_REQUEST['batch'] !='') {echo $_REQUEST['batch'];} ?>"> </td>
                                </tr>
                                <tr>
                                    <td colspan="8"><textarea class="form-control" rows="20" name="questionNumber" style="resize: none"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="8"><button type="submit" name="added" class="btn btn-primary" >Submit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </form>
    </body>
</html>
<script>
    function myFunction() {
      alert("Question has added succesfully !");
    }
</script>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('questionNumber');
</script>
