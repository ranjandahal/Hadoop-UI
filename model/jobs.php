<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$jobs[] = array('name' => 'List Example', 
                'command'=>'ls', 
                'inst'=>'Run this to see file listed under current directory</br>
                        Usage: </br> ls -a', 
                'exp'=>'ls [-a]',
                'args'=> array('-a'));
$jobs[] = array('name' => 'Start Hadoop', 
                'command'=>'./start-hadoop.sh', 
                'inst'=>'Start Hadoop', 
                'exp'=>'./start-hadoop.sh',
                'args'=> array());
$jobs[] = array('name' => 'Aggregate Word Count', 
                'command'=>'aggregatewordcount', 
                'inst'=>'An Aggregate based map/reduce program that counts the words in the input files.</br>
                        Usage:  </br>
                        inputDirs outDir [numOfReducer [textinputformat|seq [specfile [jobName]]]]</br>', 
                'exp'=>'aggregatewordcount <inputDirs> <outDir> [numOfReducer [textinputformat|seq [specfile [jobName]]]]',
                'args'=> array('<inputfile>', '<outDir>'));
$jobs[] = array('name' => 'Aggregate Word History', 
                'command'=>'aggregatewordhist', 
                'inst'=>'An Aggregate based map/reduce program that computes the histogram of the words
                        Usage:  </br>
                        inputDirs outDir [numOfReducer [textinputformat|seq [specfile [jobName]]]]</br>', 
                'exp'=>'aggregatewordhist <inputfile> <outDir>',
                'args'=> array('<inputfile>', '<outDir>'));
$jobs[] = array('name' => 'Bailey-Borwein-Plouffe', 
                'command'=>'bbp', 
                'inst'=>'A map/reduce program that uses Bailey-Borwein-Plouffe to compute exact digits of Pi.</b>
                        Usage: </br>
                        bbp <startDigit> <nDigits> <nMaps> <workingDir></br>', 
                'exp'=>'bbp <startDigit> <nDigits> <nMaps> <workingDir>',
                'args'=> array('<startDigit>', '<nDigits>', '<nMaps>', '<workingDir>'));
$jobs[] = array('name' => 'PageView Count Database', 
                'command'=>'dbcount', 
                'inst'=>'An example job that count the pageview counts from a database.', 
                'exp'=>'dbcount',
                'args'=> array());
$jobs[] = array('name' => 'Exact Bits of PI', 
                'command'=>'distbbp', 
                'inst'=>"A map/reduce program that uses a BBP-type formula to compute exact bits of Pi.</br>
                        Usage: </br>
                        &lt;b&gt; &lt;nThreads&gt; &lt;nJobs&gt; &lt;type&gt; &lt;nPart&gt; &lt;remoteDir&gt; &lt;localDir&gt;</br>
                        &lt;b&gt; The number of bits to skip, i.e. compute the (b+1)th position.</br>
                        &lt;nThreads&gt; The number of working threads.</br>
                        &lt;nJobs&gt; The number of jobs per sum.</br>
                        &lt;type&gt; 'm' for map side job, 'r' for reduce side job, 'x' for mix type.</br>
                        &lt;nPart&gt; The number of parts per job.</br>
                        &lt;remoteDir&gt; Remote directory for submitting jobs.</br>
                        &lt;localDir&gt; Local directory for storing output files.</br>", 
                'exp'=>'distbbp <b> <nThreads> <nJobs> <type> <nPart> <remoteDir> <localDir>',
                'args'=> array('<b>', '<nThreads>', '<nJobs>', '<type>', '<nPart>', '<remoteDir>', '<localDir>'));
$jobs[] = array('name' => 'Count Matches Regex', 
                'command'=>'grep', 
                'inst'=>'A map/reduce program that counts the matches of a regex in the input.</br>
                        Usage: </br>
                        Grep <inDir> <outDir> <regex> [<group>]', 
                'exp'=>'Grep <inDir> <outDir> <regex> [<group>]',
                'args'=> array('<inDir>', '<outDir>', '<regex>', '[<group>]'));
$jobs[] = array('name' => 'Join Over Sorted', 
                'command'=>'join', 
                'inst'=>'A job that effects a join over sorted, equally partitioned datasets </br>
                        Usage: </br>
                        join [-r <reduces>] [-inFormat &lt;input format class>] [-outFormat &lt;output format class>] 
                        [-outKey &lt;output key class>] 
                        [-outValue &lt;output value class>] [-joinOp <inner|outer|override>] [input]* &lt;input> <output>', 
                'exp'=>'join [-r <reduces>] [-inFormat <input format class>] [-outFormat <output format class>] 
                        [-outKey <output key class>] 
                        [-outValue <output value class>] [-joinOp <inner|outer|override>] [input]* <input> <output>',
                'args'=> array('[-r <reduces>]', '[-inFormat <input format class>]', '[-outFormat <output format class>]', 
                        '[-outKey <output key class>]',
                        '[-outValue <output value class>]', '[-joinOp <inner|outer|override>]', '[input]* <input> <output>'));
$jobs[] = array('name' => 'Count Words From Files', 
                'command'=>'multifilewc', 
                'inst'=>'A job that counts words from several files.</br>
                        Usage : </br>
                        multifilewc <input_dir> <output>', 
                'exp'=>'multifilewc <input_dir> <output>',
                'args'=> array('<input_dir>', '<output>'));
$jobs[] = array('name' => 'Pentomino Problems', 
                'command'=>'pentomino', 
                'inst'=>'A map/reduce tile laying program to find solutions to pentomino problems.</br>
                        Usage: </br>
                        pentomino <output> [-depth #] [-height #] [-width #]', 
                'exp'=>'pentomino <output> [-depth #] [-height #] [-width #]',
                'args'=> array('<output>', '[-depth #]', '[-height #]', '[-width #]'));
$jobs[] = array('name' => 'Value Of PI', 
                'command'=>'pi', 
                'inst'=>'A map/reduce program that estimates Pi using a quasi-Monte Carlo method.</br>
                        Usage: </br>
                        org.apache.hadoop.examples.QuasiMonteCarlo <nMaps> <nSamples>', 
                'exp'=>'pi <nMaps> <nSamples>',
                'args'=> array('<nMaps>', '<nSamples>'));
$jobs[] = array('name' => 'Random Text Writer', 
                'command'=>'randomtextwriter', 
                'inst'=>'A map/reduce program that writes 10GB of random textual data per node.</br>
                        Usage: </br>
                        randomtextwriter [-outFormat <output format class>] <output>', 
                'exp'=>'randomtextwriter [-outFormat <output format class>] <output>',
                'args'=> array('[-outFormat <output format class>]', '<output>'));
$jobs[] = array('name' => 'Random Data Writer', 
                'command'=>'randomwriter', 
                'inst'=>'A map/reduce program that writes 10GB of random data per node.</br>
                        Usage: </br>writer <out-dir>', 
                'exp'=>'randomwriter <out-dir>',
                'args'=> array('<out-dir>'));
$jobs[] = array('name' => 'Define Secondary Sort', 
                'command'=>'secondarysort', 
                'inst'=>'An example defining a secondary sort to the reduce.</br>
                    Usage: </br>secondarysort <in> <out>', 
                'exp'=>'secondarysort <in> <out>',
                'args'=> array('<in>', '<out>'));
$jobs[] = array('name' => 'Sort Random Data Writer', 
                'command'=>'sort', 
                'inst'=>'A map/reduce program that sorts the data written by the random writer.</br>
                        Usage: </br>
                        sort [-r <reduces>] [-inFormat <input format class>] [-outFormat <output format class>] 
                        [-outKey <output key class>] [-outValue <output value class>] 
                        [-totalOrder <pcnt> <num samples> <max splits>] <input> <output>', 
                'exp'=>'sort [-r <reduces>] [-inFormat <input format class>] [-outFormat <output format class>]
                        [-outKey <output key class>] 
                        [-outValue <output value class>] [-totalOrder <pcnt> <num samples> <max splits>] <input> <output>',
                'args'=> array('[-r <reduces>]', '[-inFormat <input format class>]', '[-outFormat <output format class>]',
                                '[-outKey <output key class>]', '[-outValue <output value class>]',
                                '[-totalOrder <pcnt> <num samples> <max splits>]', '<input>', '<output>'));
$jobs[] = array('name' => 'Sudoku Solver', 
                'command'=>'sudoku', 
                'inst'=>'A sudoku solver.', 
                'exp'=>'',
                'args'=> array());
$jobs[] = array('name' => 'Generate Data for Terasort', 
                'command'=>'teragen', 
                'inst'=>'Generate data for the terasort</br>
                        Usage: </br> teragen <num rows> <output dir>', 
                'exp'=>'teragen <num rows> <output dir>',
                'args'=> array('<num rows>', '<output dir>'));
$jobs[] = array('name' => 'Run Terasort', 
                'command'=>'terasort', 
                'inst'=>'Run the terasort', 
                'exp'=>'',
                'args'=> array());
$jobs[] = array('name' => 'Check Terasort Result', 
                'command'=>'teravalidate', 
                'inst'=>'Checking results of terasort</br>
                        Usage: </br>teravalidate <out-dir> <report-dir>', 
                'exp'=>'teravalidate <out-dir> <report-dir>',
                'args'=> array('<out-dir>', '<report-dir>'));
$jobs[] = array('name' => 'Word Count From File', 
                'command'=>'wordcount', 
                'inst'=>'A map/reduce program that counts the words in the input files.</br>
                        Usage: </br>wordcount &lt;inputfile&gt; [&lt;in&gt;...] &lt;outputfile&gt;',
                'exp'=>'wordcount <inputfile> [<inputfile>...] <outputfile>',
                'args'=> array('<inputfile>', '[<in>...]', '<outputfile>'));
$jobs[] = array('name' => 'Average Length of Words', 
                'command'=>'wordmean', 
                'inst'=>'A map/reduce program that counts the average length of the words in the input files.</br>
                        Usage: </br>wordmean &lt;inputfile&gt; &lt;outputfile&gt;', 
                'exp'=>'wordmean <inputfile> <outputfile>',
                'args'=> array('<inputfile>', '<outputfile>'));
$jobs[] = array('name' => 'Median Lenght of Words', 
                'command'=>'wordmedian', 
                'inst'=>'A map/reduce program that counts the median length of the words in the input files.</br>
                        Usage: </br>wordmedian &lt;inputfile&lt; &gt;outputfile&gt;',  
                'exp'=>'wordmedian <inputfile> <outputfile>',
                'args'=> array('<inputfile>', '<outputfile>'));
$jobs[] = array('name' => 'Standard Deviation of Words', 
                'command'=>'wordstandarddeviation', 
                'inst'=>'A map/reduce program that counts the standard deviation of the length of the words in the input files.</br>
                        Usage: </br>wordstandarddeviation <inputfile> <outputfile>',   
                'exp'=>'wordstandarddeviation <inputfile> <outputfile>',
                'args'=> array('<inputfile>', '<outputfile>'));

function get_hdfs_files(){
    $files = array();
    $dir = '/local';

    if ($open = opendir($dir)) {
       while ($file = readdir($open)) {
          if ($file != ".." && $file != ".") {
             $files[] = $dir . '/' . $file;
          }
       }
       closedir($open);
    }
    return $files;
}

?>

