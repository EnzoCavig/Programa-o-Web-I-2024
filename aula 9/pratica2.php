<?php
// Define the array structure
$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

// Recursive function to print the tree
function printTree($array, $level = 0) {
    foreach ($array as $key => $value) {
        // Print indentation based on the level of recursion
        echo str_repeat("-", $level * 2) . " " . (is_array($value) ? $key : $value) . "\n";
        
        // If the current element is an array, recursively call the function
        if (is_array($value)) {
            printTree($value, $level + 1);
        }
    }
}

// Call the recursive function on the main array
printTree($pastas);
?>
