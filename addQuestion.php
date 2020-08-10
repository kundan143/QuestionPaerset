<?php 
  
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "icloudems";
    $con = mysqli_connect($host, $username, $pass,$db );
    if(isset($_POST['edit']))
    {
        $id=$_POST['id'];
        // $courseCode=$_POST['courseCode'];
        // $courseTitle=$_POST['courseTitle'];
        // $courseCredit=$_POST['courseCredit'];
        // $courseType=$_POST['courseType'];
        // $class=$_POST['class'];
        // $division=$_POST['division'];
        // $batch=$_POST['batch'];
        $examType=$_POST['examType'];
        $questionType=$_POST['questionType'];
        $query = 'UPDATE addquestion SET examType=\''.$examType.'\', questionType=\''.$questionType.'\' WHERE id='.$id;
        $queryRun = mysqli_query($con,$query);
        $queryRun1 = mysqli_query($con,$query);
        if($queryRun){
            header("location:http://localhost/front-end/createQuestion.php?id=".$_POST ['id']. "&courseCode=".$_POST['courseCode']. "&courseTitle=" .$_POST['courseTitle']. "&courseCredit=" .$_POST['courseCredit']. "&courseType=" .$_POST['courseType']. "&class=" .$_POST['class']. "&division=" .$_POST['division'] . "&batch=" .$_POST['batch']. "&examType=" .$_POST['examType']."&questionType=" .$_POST['questionType']);
        }
    }
    if(isset($_POST['edit1']))
    {
        header("location:http://localhost/front-end/addQuestionPaper.php?id=".$_POST ['id']. "&courseCode=".$_POST['courseCode']. "&courseTitle=" .$_POST['courseTitle']. "&courseCredit=" .$_POST['courseCredit']. "&courseType=" .$_POST['courseType']. "&class=" .$_POST['class']. "&division=" .$_POST['division'] . "&batch=" .$_POST['batch']);
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
        <!-- ------------------------------Side bar start------------------------ -->
        <div class="row">
            <div class="col-lg-2">
                <nav class="navbar bg-light" style="width:50%">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Reports</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Examination</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Examination</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Assignments</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Online Exam</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Course</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Proctor</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Student</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Attendance</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Apply Leave</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Question Banks</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Time Table</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Circular</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href="#">Performance</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <!-- --------------------------Side bar End-------------------------- -->
            <div class="col-lg-10">
                <ul class="breadcrumb" style="margin: 10px">
                    <a href="./index.php"><i class='fas fa-home' style='font-size:24px'></i></a>
                    <li class="breadcrumb-item"><a href="#">Question Bank</a></li>
                    <li class="breadcrumb-item">Add a new Question</li>
                </ul>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="table-responsiave">
                        <table class="table table-bordered" style="text-align: center;">
                            <thead style="background-color: #f3eff0">
                                <tr>
                                    <th rowspan="2">SN</th>
                                    <th colspan="4">Course Details</th>
                                    <th rowspan="2">Class</th>
                                    <th rowspan="2">Division</th>
                                    <th rowspan="2">Batch</th>
                                    <th rowspan="2">Exam Type</th>
                                    <th rowspan="2"> Questions type</th>
                                    <th rowspan="2">Options</th>
                                    <th rowspan="2">Go</th>
                                    <th rowspan="2">Go</th>
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
                                    <td>
                                        <select class="form-control-lg"  name="examType" >
                                            <option>MAIN</option>
                                            <option>MCQ</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control-lg" name="questionType" >
                                            <option>Description</option>
                                        </select>
                                    </td>
                                    
                                    <td>-</td>
                                    <td><input type="submit" name="edit" value="create questions" class="btn btn-primary"></td>
                                    <td><input type="submit" name="edit1" value="Create Questions paper" class="btn btn-primary"></td>         
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
