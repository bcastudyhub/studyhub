<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Study Hub</title>
    </head>
    <style>
        body{
        background-color: #dbd8e3;
        font-family:"Audiowide", sans-serif;
        text-align: center;
        user-select: none;
        cursor:pointer;
        font-size:20px;
        color:red;
        }
        table{
        width:30%;
        font-size:20px;
        height:auto;
        }
        input[type="submit"],input[type="file"],select{
        background-color:transparent ;
        color: #2a2438;
        border-width: 3px;
        border-color: #5c5470;
        border-top-color: white;
        width: 100%;
        height: auto;
        border-radius: 50px;
        }
        ::file-selector-button{
        background-color:transparent ;
        color: #2a2438;
        border-width: 3px;
        border-color: #5c5470;
        border-top-color: white;
        width: 50%;
        height: auto;
        border-radius: 50px;
        }
        h2{
            color:#2a2438;
        }
    </style>
    <body>
        <h2>Study Hub</h2>
        <form enctype="multipart/form-data" method="post">
            <table border="0" align="center">
                <tr>
                    <td>
                        <select name="sub">
                            <option name="sub" selected hidden>Subject</option>
                            <optgroup label="Semester-1">
                                <option name="sub" value="OAT">Office Automation Tools</option>
                                <option name="sub" value="C">Programming in C</option>
                                <option name="sub" value="CF">Computer Fundamentals</option>
                                <option name="sub" value="FM">Fundamental Mathematics</option>
                                <option name="sub" value="CS">Communication Skills</option>
                            </optgroup>
                            <optgroup label="Semester-2">
                                <option name="sub" value="DS">Data Structure</option>
                                <option name="sub" value="DBMS">Database Management System</option>
                                <option name="sub" value="OS">Operating System</option>
                                <option name="sub" value="FA">Financial Accounts</option>
                                <option name="sub" value="SSD">Soft Skills Development</option>
                            </optgroup>
                            <optgroup label="Semester-3">
                                <option name="sub" value="CPP">Programming in C++</option>
                                <option name="sub" value="WD">Web Designing</option>
                                <option name="sub" value="RDBMS">Renational DBMS</option>
                                <option name="sub" value="SE">Software Engineering</option>
                                <option name="sub" value="BS">Business Statistics</option>
                            </optgroup>
                            <optgroup label="Semester-4">
                                <option name="sub" value="ASP">Web Development-1(ASP.Net)</option>
                                <option name="sub" value="PHP">Web Development-2(PHP)</option>
                                <option name="sub" value="CJ">Core Java</option>
                                <option name="sub" value="DCCN">Data Communication and Computer Network</option>
                                <option name="sub" value="ESDM">Environmental Science and Disaster Management</option>
                            </optgroup>
                            <optgroup label="Semester-5">
                                <option name="sub" value="ANDROID">Android</option>
                                <option name="sub" value="PYTHON">Python</option>
                                <option name="sub" value="US">Unix & Shell</option>
                                <option name="sub" value="ECCS">E-Commerce & Cyber Security</option>
                                <option name="sub" value="ETIT">Emerging Trends in IT</option>
                            </optgroup>
                        </select><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="category">
                            <option name="category" selected hidden>Category</option>
                            <option name="category" value="Chapters">Chapters</option>
                            <option name="category" value="Topics">Topics</option>
                            <option name="category" value="Assignments">Assignments</option>
                            <option name="category" value="Notes">Notes</option>
                            <option name="category" value="IMP">IMP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" accept=".pdf" name="pdf_file"></td>
                </tr>
                <tr>
                    <th><input type="submit" value="Submit" name="insert"></th>
                </tr>
            </table>
        </form>
<!--php code starts here-->
<?php
	if (isset($_POST['insert'])) {
		$server="localhost";
        $user="root";
        $password="";
        $database="studyhub";
        $con=mysqli_connect($server,$user,$password,$database)
        or die ("database not conneted");
        $sub=$_POST['sub'];
        $category=$_POST['category'];
        if($sub=="Subject"){
            echo "Select Subject";
        }
        else if($category=="Category"){
            echo "Select Category";
        }
        else if($_FILES["pdf_file"]["name"]==""){
            echo "Select File";
        }
        else{
            if (isset($_FILES['pdf_file']['name']))
            {
            $file_name = $_FILES['pdf_file']['name'];
            $fileTempName = $_FILES['pdf_file']['tmp_name'];
            $fileDestination = 'C:/wamp/www/StudyHub/project/Materials/'.$sub.'/'.$category;
            $insertquery ="INSERT INTO study VALUES('$sub','$category','$file_name')";
            $iquery = mysqli_query($con, $insertquery);
            move_uploaded_file($fileTempName,$fileDestination);
            }
        }
    }
?>
    </body>
</html>
