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
        $query="INSERT INTO addquestion (courseCode,courseTitle)VALUES ('$courseCode',' $courseTitle')";
        $queryRun = mysqli_query($con,$query);
        if($queryRun)
        {
            echo "kundan";
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
    </head>
    <body>
       
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
                                   
                                    <td><input type="text"  name="courseCode"    class="form-control"></td>
                                    <td><input type="text"  name="courseTitle"   class="form-control"></td>

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