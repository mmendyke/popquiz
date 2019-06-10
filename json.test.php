<?php
Header("content-type: application/x-javascript");
$url = 'https://devtest.equisolve-dev.com/'; // JSON file
$data = file_get_contents($url); // JSON file contents
$vals = json_decode($data); // decode JSON feed
rsort($vals); // sort array data by first variable (date) in reverse chronological order

$result  = '<div id="result"><ul>';

foreach ($vals as $val) { $result .= "<li>" . $val->published_at . " <em>" . $val->title . "</em></li>"; } // generate display data

$result .= '<h3>source data located at: (' . $url . ')</h3>';
$result .= '</div>';

echo "document.write($result)";
