# Hadoop-UI
PHP application for Hadoop UI. This application allows user to run hadoop commands without knowning them. Users will see human readable dropdown list of commands in order to execute them. Some commands requires a source file which can be uploaded to HDFS directly from the portal.

## Getting Started
This is a php application. So in order to deploy to project, you need php installed on your machine. You would need Hadoop installed with sample files.

### Prerequisites
PHP 5.5 or higher
Hadoop 2.2 or higher

## Running the tests
To run test, you basically access the portal and go to Jobs page to run any command from the dropdown. 

### And coding style tests
Project consists of below structure:
1. Header and footer views [header.php & footer.php]
2. Jobs folder
  i.   It consists of index.php controller
  ii.  Job list php page to show all the jobs and related command + parameter needed to run it.
  iii. Upload.php partial ajax called page to upload file and upload_script page to process the files with the help of a bash script.
3. Model folder consists of an array of job object that holds Hadoop sample prjects commands including arguments. This objects facilitate jobs.php file to provide jobs list in a dropdown list.
```
Sample job object:
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
```

## Version
1.0

## Authors
* **Bo Sheng** - *Initial work*
* **Ranjan Dahal** - *Initial work* - (https://github.com/ranjandahal)
* **Thomas Wu** - *Contributor*

## License
This project is licensed under the UMB License.

## Acknowledgments
* 
