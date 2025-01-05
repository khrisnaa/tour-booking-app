<?php

if (! function_exists('formatPrice')) {
    function formatPrice($amount)
    {
        return 'Rp'.number_format($amount, 0, ',', '.');
    }
}

if (! function_exists('formatDuration')) {
    /**
     * Format durasi dalam format "X days Y hours".
     *
     * @param int $days
     * @param int $hours
     * @return string
     */
    function formatDuration($days, $hours)
    {
        $duration = '';

        if ($days > 0) {
            $duration .= $days.' days';
        }

        if ($hours > 0) {
            // Jika sudah ada "days", tambahkan spasi sebelum "hours"
            if ($days > 0) {
                $duration .= ' ';
            }
            $duration .= $hours.' hours';
        }

        return $duration;
    }
}