<?php
do{
echo"\n Menu: \n";
echo "1. Sort the array by keys accending \n";
echo "2. Sort the array by keys descending \n";
echo "3. Sort the array by values ascending \n";
echo "4. Sort the array by values descending \n";
echo "5. Filter the odd elements from the array \n";
echo "6: Exit";
echo "Enter your choice:";
$choice=intval(trim(fgets(STDIN)));

switch($choice)
{
case 1:
    echo "sorted Array by keys:\n";
    print_r(sortByKeysAcsending($array));    
}

?>