<?php

    function formatMeetupTime($meetup)
    {
        $starts = $meetup->starts_at->format('Y-m-d');
        $ends = $meetup->ends_at->format('Y-m-d');

        $str = $starts == $ends ? '' : 'm\/d';

        return $meetup->starts_at->format('m\/d H:i') . ' ~ ' . $meetup->ends_at->format($str . ' H:i');
    }