<?php
require('../model/jobs.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'job_list';
    }
}

try {      
    $selectOption = filter_input(INPUT_POST,'jobOption');
    if($selectOption == null || $selectOption == FALSE){
        $selectOption = $jobs[0]['command'];
    }

    $files = get_hdfs_files();
    foreach($jobs as $job){
        if(strcmp($selectOption, $job['command']) == 0){
            $current_job = $job;
            $instruction = $job['inst'];
            $example = $job['exp'];
            $command = $job['command'];
            $args = $job['args'];
            break;
        }
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
}
$output = "None";

if($action == 'run'){
    echo $selectOption;
    $command = $selectOption;
    foreach ($args as $arg){
        $arg_val = filter_input(INPUT_POST,$arg);
        if($arg_val !== NULL){
            $command .= ' ' . $arg_val; 
        }
    }
    $output = shell_exec($command);
}
include('job_list.php');
?>