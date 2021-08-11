<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output)) $output = implode(',', $output);
	echo "<script>console.log('$output');</script>";
}

function formatted_dump($obj, $print_to_console=TRUE) {
	if ($print_to_console) debug_to_console($obj);
	else echo "<pre>". var_dump($obj) ."</pre>";
}
?>