<?php 
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "icloudems";
    $con = mysqli_connect($host, $username, $pass,$db );
    $query="select * from addquestion";
    $result = mysqli_query($con,$query);
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
                <div>
                    <ul class="nav nav-tabs" role="tablist" style="margin-top: 15px">
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#add">Add new Question</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#search">Search Questions</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="add" class="container tab-pane active" style="margin-top:10px">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Question Bank</a></li>
                                <li class="breadcrumb-item">Add a new Question</li>
                            </ul>
                            <div class="table-responsiave">
                                <table class="table table-bordered table-wrapper-scroll-y my-custom-scrollbar" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Sr.No.</th>
                                            <th colspan="4">Course Details</th>
                                            <th rowspan="2">Class</th>
                                            <th rowspan="2">Division</th>
                                            <th rowspan="2">Batch</th>
                                            <th rowspan="2"> Create Questions</th>
                                            <th rowspan="2">Copy structure</th>
                                            <th rowspan="2">Upload question paper image</th>
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
                                        <tbody>
                            <?php 
                                    while($rows=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                        <tr>
                                        <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['courseCode']; ?></td>
                                            <td><?php echo $rows['courseTitle']; ?></td>
                                            <td><?php echo $rows['courseCredit']; ?></td>
                                            <td><?php echo $rows['courseType']; ?></td>
                                            <td><?php echo $rows['class']; ?></td>
                                            <td><?php echo $rows['division']; ?></td>
                                            <td><?php echo $rows['batch']; ?></td>
                                            <td><a href="./addQuestion.php?id=<?php echo $rows['id']; ?>&courseCode=<?php echo $rows['courseCode']; ?>&courseTitle=<?php echo $rows['courseTitle']; ?>&courseCredit=<?php echo $rows['courseCredit']; ?>&courseType=<?php echo $rows['courseType']; ?>&class=<?php echo $rows['class']; ?>&division=<?php echo $rows['division']; ?>&batch=<?php echo $rows['batch']; ?>" class="btn btn-primary">proceed</a></td>
                                            <td><a href="#" class="btn btn-primary">Copy</a></td>
                                            <td><a href="#" ><input type="file" ></a></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                        </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="search" class="container tab-pane active">
                            <div class="card" style="margin-top: 10px">
                                <div class="card-header">Search Questions you want to view/Edit/Delete</div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Question Type</th>
                                                <th>Course</th>
                                                <th>Topic</th>
                                                <th>Difficulty Level</th>
                                                <th>Search</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select id="class" name="class" class="form-control">
                                                        <option>Select</option>
                                                        <option value="MCA">MCA</option>
                                                        <option value="MBA">MBA</option>
                                                        <option value="MCom">MCom</option>
                                                        <option value="Msc">MSc</option>
                                                      </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" id="questiontype" name="questiontype">
                                                        <option>Select</option>
                                                        <option value="mandatory">mandatory</option>
                                                        <option value="optional">optional</option>
                                                      </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" id="course" name="course">
                                                        <option>Select</option>
                                                        <option value="c">C</option>
                                                        <option value="Nodejs">Nodejs</option>
                                                        <option value="MySql">MySql</option>
                                                        <option value="aws">AWS</option>
                                                      </select>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="questiontype" name="questiontype">
                                                        <option>Select</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                      </select>
                                                </td>
                                                <td>
                                                    <button class="form-control" type="submit"><i class="fa fa-search"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="card-footer">Footer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>