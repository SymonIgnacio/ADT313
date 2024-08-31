<h1>Hands-On Activity</h1>
<?php

function generateRandomId(){
    return rand(1000, 9999);  
}


$table = array(
    "header" => array(
        "StudentID",
        "Firstname",
        "Middelname",
        "Lastname",
        "Section",
        "Course",
        "yearLevel"
    ),
    "body" => array(
        array(
            "Firstname" => "Symon",
            "Middelname" => "NA",
            "Lastname" => "Ignacio",
            "Section" => "3A",
            "Course" => "IT",
            "yearLevel" => "3rd"
        ),
        array(
            "Firstname" => "James",
            "Middelname" => "NA",
            "Lastname" => "Solamo",
            "Section" => "3A",
            "Course" => "IT",
            "yearLevel" => "3rd"
        ),array(
            "Firstname"=>"John Robert",
            "Middelname"=>"Na",
            "Lastname"=>"Gumban",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        array(
            "Firstname"=>"Ronel",
            "Middelname"=>"NA",
            "Lastname"=>"Nuylan",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        array(
            "Firstname"=>"Russel",
            "Middelname"=>"NA",
            "Lastname"=>"Alanus",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        array(
            "Firstname"=>"John Bernard",
            "Middelname"=>"NA",
            "Lastname"=>"Dela Cruz",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ), array(
            "Firstname"=>"Christine",
            "Middelname"=>"NA",
            "Lastname"=>"Lazaro",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        array(
            "Firstname"=>"Ace",
            "Middelname"=>"NA",
            "Lastname"=>"Matamis",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ), array(
            "Firstname"=>"Elaiza",
            "Middelname"=>"NA",
            "Lastname"=>"Pugoza",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        array(
            "Firstname"=>"Franc Alven",
            "Middelname"=>"NA",
            "Lastname"=>"Dela Cruz",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ), 
        array(
            "Firstname"=>"Patricia",
            "Middelname"=>"NA",
            "Lastname"=>"Polintan",
            "Section"=>"3A",
            "Course"=>"IT",
            "yearLevel"=>"3rd"
        ),
        
    )
);

function addIdtoArray(&$table){
    foreach($table['body'] as &$student){
        $studentID = generateRandomId();
        array_unshift($student, $studentID);
    }
}

addIdtoArray($table);


echo '<table border="1">';
echo '<tr>';
foreach ($table['header'] as $header) {
    echo '<th>', htmlspecialchars($header), '</th>';
}
echo '</tr>';


foreach ($table['body'] as $student) {
    echo '<tr>';
    foreach($student as $data){
        echo '<td>', htmlspecialchars($data), '</td>';  
    }
    echo '</tr>';
}

echo '</table>';
?>
