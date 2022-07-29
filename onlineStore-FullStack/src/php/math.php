<!-- Calculate total amounts -->
<?php
function calcAmount($num)
{
    $rate = $_POST['rates'];
    // daily rate times number of booked days
    return $rate * $num;
}
?>

<!-- Calculate number of days -->
<?php
function calculateDays($date1, $date2)
{
    // Calculate difference between dates
    $diff = strtotime($date2) - strtotime($date1);
    // 1 day = 24 hours = 1440 minutes = 86000 seconds
    return abs(round($diff / 86400));
}
?>
