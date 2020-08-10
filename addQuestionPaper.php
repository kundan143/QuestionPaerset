<?php 
  
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "icloudems";
    $con = mysqli_connect($host, $username, $pass,$db );
    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $NameForThisPaper = $_POST['NameForThisPaper'];
        $Units = $_POST['Units'];
        $ExamType1 = $_POST['ExamType1']; 
        $SubExam = $_POST['SubExam'];
        $Description = strip_tags($_POST['Description']);
        $query = 'UPDATE addquestion SET NameForThisPaper = \'' .$NameForThisPaper. '\', Units = \'' .$Units. '\',  ExamType1=\''.$ExamType1. '\', SubExam = \'' .$SubExam. '\', Description = \'' .$Description. '\' WHERE id='.$id;
        
        $queryRun = mysqli_query($con,$query);
        if($queryRun){
            header("location:http://localhost/front-end/createdQuestionList.php?id=".$_POST ['id']. "&courseCode=".$_POST['courseCode']. "&courseTitle=" .$_POST['courseTitle']. "&courseCredit=" .$_POST['courseCredit']. "&courseType=" .$_POST['courseType']. "&class=" .$_POST['class']. "&division=" .$_POST['division'] . "&batch=" .$_POST['batch']);
        }
        else{
            echo'kumar';
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
            <a href="#"><img src="cloudems-logo.png"></a>
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
                            <a class="nav-link"href="./index.php">Question Banks</a>
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
                    <li class="breadcrumb-item">Create Question Paper</li>
                </ul>
                <form action="" method="POST">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="margin-right: 10px">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="table-responsiave">
                                <table class="table table-bordered" style="text-align: center">
                                    <thead class="shadow-lg p-3 mb-5  rounded" style="background-color: #f3eff0">
                                        <tr >
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
                                        <tr class="shadow-lg p-3 mb-5 bg-white rounded">
                                            <td><input type="text"  name="courseCode"   readonly="readonly" class="form-control" value="<?php if(isset($_REQUEST['courseCode']) && $_REQUEST['courseCode'] !='') {echo $_REQUEST['courseCode'];}  ?>"></td>
                                            <td><input type="text"  name="courseTitle"  readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseTitle']) && $_REQUEST['courseTitle'] !='') {echo $_REQUEST['courseTitle'];}  ?>"></td>
                                            <td><input type="text"  name="courseCredit" readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseCredit']) && $_REQUEST['courseCredit'] !='') {echo $_REQUEST['courseCredit'];}  ?>"></td>
                                            <td><input type="text"  name="courseType"   readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['courseType']) && $_REQUEST['courseType'] !='') {echo $_REQUEST['courseType'];}  ?>"></td>
                                            <td><input type="text"  name="class"        readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['class']) && $_REQUEST['class'] !='') {echo $_REQUEST['class'];}  ?>"></td>
                                            <td><input type="text"  name="division"     readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['division']) && $_REQUEST['division'] !='') {echo $_REQUEST['division'];}  ?>"></td>
                                            <td><input type="text"  name="batch"        readonly="readonly" class="form-control"value="<?php if(isset($_REQUEST['batch']) && $_REQUEST['batch'] !='') {echo $_REQUEST['batch'];}  ?>"></td>
                                        </tr> 
                                        <tr class="shadow-lg p-3 mb-5 bg-white rounded">
                                            <td colspan="7"><h6 style="text-align: center"><b>Preparing a Question paper process</b></h6></td>
                                        </tr>
                                        <tr>
                                            <td>Enter a Name/ID for this paper</td>
                                            <td><input type="text" name="NameForThisPaper"class="form-control"></td>
                                            <td rowspan="3" style="margin-top: 100px;"><label text-align="center"><br><br><br><br><br><br><br><br><b>Description (Write <br>some Description <br>about this paper here...)</b></label></td>
                                            <td rowspan="3"><br><br><br><br><br><br><br><br><b>:</b></td>
                                            <td>Exam Type</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="ExamType1">
                                                    <option>Internal Assessment Exam</option>
                                                    <option>End Sem Exam</option>
                                                    <option>IA</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Enter no. of Section/Untis</td>
                                            <td>
                                                <select class="form-control" name="Units">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>8</option>
                                                </select>
                                            </td>
                                            
                                            <td>Sub-Exam</td>
                                            <td>:</td>
                                            <td colspan="2">
                                                <select class="form-control" name="SubExam">
                                                    <option>Unit-test 1</option>
                                                    <option>Unit-test 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><b>Entered section -2</b></td>
                                            <td><label>Section 1</label><input type="text" class="form-control"><label>section 2</label><input type="text" class="form-control"></td>
                                            <td colspan="3"><textarea class="form-control"name="Description" style="resize: none"></textarea></td>

                                        </tr>
                                        <tr>
                                            <td colspan="4"><a href="./index.php"><input type="button" class="btn btn-primary" value="<< Back"></a></td>
                                            <td colspan="4" ><input type="submit" name="update" class="btn btn-primary" value="Next >>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </body>
</html>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('Description');
</script>
