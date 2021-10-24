<?php
    function formatDollarAmount(float $amount): string{
        if ($amount < 0){
            return ('-$' .  number_format(abs($amount), 2));
        }else{
            return ('$' . number_format($amount, 2));
        }
    }
    function formatDate(string $date): string{
        return date('M j, Y', strtotime($date));
    }
?>
