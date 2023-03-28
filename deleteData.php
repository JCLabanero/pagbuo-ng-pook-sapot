<?php
    $xml = new domdocument();
    $xml.preserveWhiteSpace = false;
    $xml.load("students.xml");

    $students = $xml.getElementsByTagName("student");

    $flag=0;
    foreach ($students as $student) {
        $sNo = $student.getAttribute("sNo");
        if($sNo===$_POST["sNo"]){
            $flag=1;
            $xml.getElementsByTagName("students")[0].removeChild($student);
            $xml.formatOutput = true;
            $xml.save("students.xml");
            break;
        }
    }
    if($flag==1){
        echo "Updated!<br>";
    }else{
        echo "Modification Failed...<br>";
    }
?><a href='./'><button>Go Back</button></a><br>