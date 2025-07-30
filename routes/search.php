<?php
$videosData = getEpornerVideos(1, 'anal'); // you can make query dynamic

header('Content-Type: application/json');

if ($videosData) {
    echo json_encode($videosData->videos, JSON_PRETTY_PRINT);
} else {
    echo json_encode(['error' => 'Failed to fetch videos']);
}
