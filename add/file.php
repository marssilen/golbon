<?php
//ini_set('memory_limit', '-1');
$file="b.mp4";
$filename=$file;
$filesize = filesize($file);
$offset = 0;
$length = $filesize;

if ( isset($_SERVER['HTTP_RANGE']) ) {
    // if the HTTP_RANGE header is set we're dealing with partial content

    $partialContent = true;

    // find the requested range
    // this might be too simplistic, apparently the client can request
    // multiple ranges, which can become pretty complex, so ignore it for now
    preg_match('/bytes=(\d+)-(\d+)?/', $_SERVER['HTTP_RANGE'], $matches);

	if(isset($matches[1]))
		if($matches[1]<$filesize && $matches>=0)
			$offset = intval($matches[1]);
	$end_offset=(isset($matches[2]))?$matches[2]:$filesize;
	if($end_offset>$filesize || $end_offset<$offset)$end_offset=$filesize;
	
    $length = intval($end_offset) - $offset;
	//edited
	//$filesize=$length;
	//echo $offset.'   '.$matches[2].' '.$length."\tramin\n";
} else {
    $partialContent = false;
}



if ( $partialContent ) {
	
    // output the right headers for partial content
	$file = fopen($file, 'r');
	// seek to the requested offset, this is 0 if it's not a partial content request
	fseek($file, $offset);
	$data = fread($file, $length);
	fclose($file);

    header('HTTP/1.1 206 Partial Content');

    header('Content-Range: bytes ' . $offset . '-' . ($offset + $length) . '/' . $filesize);
}

// output the regular HTTP headers
header('Content-Type: ' . 'video/mp4');
header('Content-Length: ' . $length);//$filesize
header('Real-File-Size: '.$filesize);
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Accept-Ranges: bytes');

// don't forget to send the data too
if($partialContent)print($data);
