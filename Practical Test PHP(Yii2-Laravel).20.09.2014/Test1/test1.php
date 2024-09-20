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
function print_array($array) {
    # Define the local batch size
    $my_batch_size = 5;
    # Iterate array in batches of 5
    $my_batches = array_chunk($array, $my_batch_size); # Check array then in what batches.
    # iterate through each records no matter what. Reason for foeach is it will go through everything all records in the array, better in this instance than using a for loop
    foreach($my_batches as $my_batch){
        foreach ($my_batch as $record_index => $record_value){
            # Print to screen the index and records value side by side
            echo "\n Index: $record_index, Value: $record_value";
        }
        echo "\n --------------------------------------------------------------- \n ";
    }
}

# print to console
$my_array = populate_array(20); # Populate the array with 20 records
print($my_array); # Display array records to console