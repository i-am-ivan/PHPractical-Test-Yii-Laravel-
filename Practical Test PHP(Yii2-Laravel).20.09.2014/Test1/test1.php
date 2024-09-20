<?php
# Test 1: PHP Array Manipulation

# Description: An array function to iterate 20 records in batches of 5 and print their index number and value  of each record.

function populate_array($record){
    # population the array with 20 records
    $my_array = array(); # Initialize the array
    for($r = 0; $r < $record; $r++){
        $my_array[] = "Record_" . ($r + 1);
    }
}

# function to iterate through each array then print their index and value
function print_array($array) {}

# print to console
$my_array = populate_array(20); # Populate the array with 20 records
print($my_array); # Display array records to console