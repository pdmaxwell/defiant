<?php
    $text = file_get_contents("test_file.txt");
    
    $bracketText = array();
    preg_match_all('/\[([^\[\]]+)\]/', $text, $bracketText);
    
    if(!empty($bracketText[1]))
    {
        echo '<script type="application/javascript">console.log(' . json_encode($bracketText[1]) . ')</script>';
    }
?>
