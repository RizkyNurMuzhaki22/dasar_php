<?php

$grade = 60;

if ($grade >= 0 && $grade <= 50) {
    echo "Grade D";
    # code...
} else if ($grade >= 51 && $grade <= 70) {
    echo "Grade C";
    # code...
} else if ($grade >= 71 && $grade <= 80){
    echo "Grade B";

} else if ($grade >= 81 && $grade <= 100){
    echo " Grade A";
}

?>