Return
<a href="./">
    <button>Go Back</button>
</a>
<?php
    $xml = new domdocument();
    $xml->load("students.xml");

    $students = $xml->getElementsByTagName("student");

    foreach ($students as $student) {
        $sNo = $student->getAttribute("sNo");
        $name = $student->getElementsByTagName("name")->item(0)->nodeValue;
        $cNo = $student->getElementsByTagName("cNo")->item(0)->nodeValue;
        $address = $student->getElementsByTagName("address")->item(0)->nodeValue;
        echo "Student Number: $sNo<br>";
        echo "Name: $name<br>";
        echo "Contact: $cNo<br>";
        echo "Address: $address<br><br>";
    }
?>