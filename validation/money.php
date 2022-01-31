<?php

function type_of_variables(
    int $transfer_amount,
    int $sender_number,
    int $recipient_number
)
{
    echo "type of transfer_amount is "     .gettype($transfer_amount)."<br>";
    echo "type of sender is "              .gettype($sender_number)."<br>";
    echo "type of recipient is "           .gettype($recipient_number)."<br>";
}

function min_sum_of_transfer(
    int $transfer_amount,
    int $min_sum
)
{
    if ($transfer_amount < $min_sum)
    {
        echo "It is very little!!!"."<br>";
    }
    echo "OK!"."<br>";
}

function max_sum_of_transfer(
    int $transfer_amount,
    int $max_sum
)
{
    if ($transfer_amount > $max_sum) 
    {
        echo "It is very lot!!!"."<br>";
    }
    echo "OK!"."<br>";
}
function number_check(
    int $sender_number,
    int $recipient_number,
    int $correct_number
)
{
    if (strlen($sender_number) <> $correct_number)
    {
        echo "Incorrect adress of sender!!!"."<br>";
    }
    if (strlen($recipient_number) <> $correct_number)
    {
        echo "Incorrect adress of recipient!!!"."<br>";
    }
    echo "Done!";
}

type_of_variables(25000, 944445222, 933007337);
min_sum_of_transfer(25000, 10000);
max_sum_of_transfer(25000, 100000);
number_check(944445222, 933007337, 9);