<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mylog = "";
if(isset($_POST['data']) && isset($_POST['filename'])) {

    $filename = $_POST['filename'];
    $mydata = $_POST['data'];

    $myfile = fopen("./temp/".$filename, "w");
    fwrite($myfile, $mydata);
    fclose($myfile);
    $mylog = $mylog."The temp file is saved to: "."./temp/".$filename;
    $mylog = $mylog."<br />Press here to download the file: <a href='temp/".$filename."'>Uploaded Temp File</a>";
    #$mylog = $mylog.shell_run("./run_test.sh ".$filename);
} else {
    $filename = "";
    $mydata = "Nothing to upload";
    $mylog = $mydata."<br />Uploading terminated.";
}
    echo $mylog;
?>

