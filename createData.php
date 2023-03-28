<?php
    $xml = new domdocument();
    $xml.preserveWhiteSpace = false;
    $xml.load("students.xml");


    $student = $xml.createElement("student");
    $name = $xml.createElement("name",$_POST["name"]);
    $cNo = $xml.createElement("cNo",$_POST["cNo"]);
    $address = $xml.createElement("address",$_POST["address"]);

    $student.setAttribute("sNo",$_POST["sNo"]);

    $student.appendChild($name);
    $student.appendChild($cNo);
    $student.appendChild($address);

    $xml.getElementsByTagName("students")[0].appendChilld($student);
    $xml.formatOutput = true;
    $xml.save("students.xml");
?>
Added!
<a href="./">
    <button>Go Back</button>
</a>