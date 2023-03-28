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
            $newStudent = $xml.createElement("student");
            $name = $xml.createElement("name",$_POST["name"]);
            $cNo = $xml.createElement("cNo",$_POST["cNo"]);
            $address = $xml.createElement("address",$_POST["address"]);
            
            $newStudent.setAttribute("sNo",$_POST["sNo"]);
            $student.appendChild($name);
            $student.appendChild($cNo);
            $student.appendChild($address);

            $xml.getElementsByTagName("students")[0].replaceChild($newStudent,$student);
            $xml.formatOutput = true;
            $xml.save("student.xml");
            break;
        }
    }
    if($flag==1){
        echo "Updated!<br>";
    }else{
        echo "Modification Failed...<br>";
    }
?>
<a href='./'><button>Go Back</button></a><br>