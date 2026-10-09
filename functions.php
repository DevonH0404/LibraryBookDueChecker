<?php
// Devon Hornsby

// calculates the difference between two dates and returns the difference
function CalculateDate($dueDate, $returnDate) : string
{
    // create dates for our datetimes
    $dueDate = date_create($dueDate);
    $returnDate = date_create($returnDate);
    // get datedifference
    $dateDifference = date_diff($dueDate, $returnDate);

    // get years, months, and days from the date difference
    $years = date_interval_format($dateDifference, "%y");
    $months = date_interval_format($dateDifference, "%m");
    $days = date_interval_format($dateDifference, "%d");

    // create variable for result
    $result = "";

    // if we have year, add to the string, if we have months add to the string, if we have days add to the string
    if ($years > 0) {
        $result .= "$years years ";
    }

    if ($months > 0) {
        $result .= "$months months ";
    }

    if ($days > 0) {
        $result .= "$days days";
    }

    // trim excess white space and return the result
    return trim($result);
}

// function for seeing if the book is early or late, returns a string which will be checked in the index
function GetDateSign($dueDate, $returnDate) : string
{
    $dueDate = date_create($dueDate);
    $returnDate = date_create($returnDate);
    $dateDifference = date_diff($dueDate, $returnDate);

    // return - and +, for early and late respectively
    return date_interval_format($dateDifference, "%R");
}