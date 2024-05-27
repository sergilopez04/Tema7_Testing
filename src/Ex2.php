
<?php
echo CheckGrade(1).PHP_EOL;
echo CheckGrade(33).PHP_EOL;
echo CheckGrade(45).PHP_EOL;
echo CheckGrade(89).PHP_EOL;

function CheckGrade($grade){
    if ($grade >= 60) {
        echo "Hauries de ser de Primera Divisió :)\n";
    }
    elseif ($grade >= 45) {
        echo "Hauries de ser de Segona Divisió :))\n";
    }
    elseif ($grade >= 33) {
        echo "Hauries de ser de Tercera Divisió :))\n";
    }
    else {
        echo "A estudiar, amore\n";
    }
}

?>