<?php 
  
    $host = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "icloudems";
    $con = mysqli_connect($host, $username, $pass,$db );
    
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Examination</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/table.css">
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
                    <li class="breadcrumb-item"><a href="#"> Question Bank</a></li>
                    <li class="breadcrumb-item">Create Question Paper</li>
                </ul>
                <div class="shadow p-3 mb-5 bg-white rounded" style="margin-right: 10px">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="table-responsiave">
                            <table class="table table-bordered" style="text-align: center">
                                <thead style="background-color: #f3eff0">
                                    <tr>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <h6 style="text-align: center"><b>Created Question List</b><a href="#"> Show/hide</a></h6>
                    </div>
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-bordered" style="text-align: center;">
                                <thead>
                                    <th>Sr.No.</th>
                                    <th>Question Type</th>
                                    <th>Questions</th>
                                    <th>Max. Marks</th>
                                    <th>Difficulty Level</th>
                                    <th>Srction</th>
                                    <th>Mapping level</th>
                                    <th>CO Mapping Level</th>
                                    <th>Add</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >1
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q1</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >2
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q2</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >3
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q3</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >4
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q4</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >5
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q5</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >6
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q6</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >7
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q7</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >8
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q8</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >9
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q9</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >10
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q10</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >11
                                        </td>
                                        <td>Desscription</td>
                                        <td>Q11</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><label>0</label></td>
                                        <td>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>None</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select multiple class="form-control" id="sel" name="sellist2">
                                                <option>CO1</option>
                                                <option>CO2</option>
                                                <option>CO3</option>
                                                <option>CO4</option>
                                                <option>CO5</option>
                                              </select>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Added</button></td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                        <form action="./createQuestion.html">
                            <a href="./createQuestion.html"><input type="button" class="btn btn-primary" value="<< Back"></a>
                            <a href="./createdQuestionList.html"><input type="button" class="btn btn-primary" value="Next >>"></a>
                          </form>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>