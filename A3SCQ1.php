<?php


function mergeArrays($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}


function intersection($arr1, $arr2) {
    return array_intersect_key($arr1, $arr2);
}


function union($arr1, $arr2) {
    return $arr1 + $arr2; 
}


function setDifference($arr1, $arr2) {
    return array_diff_key($arr1, $arr2); 
}


function displayMenu() {
    echo "\nMenu:\n";
    echo "1. Merge two arrays\n";
    echo "2. Find intersection of two arrays\n";
    echo "3. Find union of two arrays\n";
    echo "4. Find set difference of two arrays\n";
    echo "5. Exit\n";
}


function main() {
    
    $arr1 = array('a' => 1, 'b' => 2, 'c' => 3);
    $arr2 = array('b' => 2, 'c' => 4, 'd' => 5);

    while (true) {
        displayMenu();
        $choice = intval(readline("Enter your choice: "));

        switch ($choice) {
            case 1:
                $result = mergeArrays($arr1, $arr2);
                echo "Merged Array: ";
                print_r($result);
                break;
            case 2:
                $result = intersection($arr1, $arr2);
                echo "Intersection: ";
                print_r($result);
                break;
            case 3:
                $result = union($arr1, $arr2);
                echo "Union: ";
                print_r($result);
                break;
            case 4:
                $result = setDifference($arr1, $arr2);
                echo "Set Difference (arr1 - arr2): ";
                print_r($result);
                break;
            case 5:
                echo "Exiting program.\n";
                exit;
            default:
                echo "Invalid choice. Please try again.\n";
        }
    }
}


main();

?>
