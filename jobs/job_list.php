<?php include '../view/header.php'; ?>
<script>
    $(document).ready(function(){
        function showHint(str) {
            if (str.length == 0) { 
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST", "upload.php?filename=" + str, true);
                xmlhttp.send();
            }
        }
        $('#upload').click(function(e){
            $('#result').html('Uploading...');
            readParts(0, document.getElementById('files').files[0].size - 1);
            e.preventDefault();
        });
        
        function readParts(myStart, myEnd) {
            var files = document.getElementById('files').files;
            var file = files[0];
            var reader = new FileReader();
            var myblob = file.slice(myStart, myEnd);
            var myExt = "";
            
            reader.readAsBinaryString(myblob);
            reader.onloadend = function(evt) {
                if (evt.target.readyState == FileReader.DONE) {
                    var myresult = evt.target.result;
                    $.post("upload_script.php", {filename: file.name + myExt, data: myresult }).done(function(data) {
                        document.getElementById('result').innerHTML =  "Done.<br /> Log:" + data;
                    });
                }
            }
        }
    });
</script>
<main>
    <section>
        <p class="bg-primary" style="font-size: 24px; padding: 10px;">Job List</p>
        <table>
            <form method="post">
            <tr>
                <th>Select Job:</th>
                <th>
                    <select name="jobOption">
                        <?php foreach($jobs as $job){ 
                            if(strcmp($selectOption, $job['command']) == 0){
                            ?>
                                <option value="<?php echo $job['command']?>" selected>
                                    <?php echo $job['name']; ?></option>
                            <?php }else{ ?>
                                <option value="<?php echo $job['command']?>">
                                    <?php echo $job['name']; } ?>
                        </option>
                        <?php } ?>
                    </select>&nbsp;&nbsp;
                    <input type='submit' name='submit'/>
                </th>
                <th></th>
                </form>
            </tr>
            <tr>
                <td><b>Instruction:&nbsp;&nbsp;</b></td>
                <td span="2">
                    <?php echo $instruction; ?>
                </td>
            </tr>
            <tr>
                <td><b>Example:&nbsp;&nbsp;</b></td>
                <td span="2">
                    <?php echo htmlspecialchars($example); ?>
                </td>
            </tr>
            <tr>
                <td><b><?php //echo $output ?>&nbsp;&nbsp;</b></td>
                <td span="2">                    
                </td>
            </tr>
        </table>
        <div id="runsection">
            <form action="." method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="run">
                <input type="hidden" name="jobOption"
                   value="<?php echo $selectOption; ?>">
                <div>
                    <table>
                        <tr>
                        <?php foreach ($args as $arg){
                            ?>
                            <td>
                            <?php echo htmlspecialchars($arg) . ': '; ?> 
                            </td>
                            <?php if (stripos($arg, 'file') == false || stripos($arg, 'dir') !== false) { ?>
                            <td><input type="text" name="<?php echo htmlspecialchars($arg); ?>" 
                                       value="<?php echo (stripos($arg, 'dir') !== false?'/local':'') ?>" 
                                       <?php //echo (stripos($arg, 'dir') !== false?'disabled':'') ?>/>
                                <?php echo (stripos($arg, 'dir') !== false?'(Default Location)':'') ?>
                            </td>
                           <?php }
                            else if(strpos($arg, 'file') !== false){ ?>
                                <td>
                                    <select name="<?php echo $arg; ?>">
                                    <?php foreach($files as $file){ 
                                        if(strcmp($fileOption, $file) == 0){ ?>
                                            <option value="<?php echo $file?>" selected>
                                                <?php echo $file; ?>
                                            </option>
                                        <?php }
                                        else{ ?>
                                            <option value="<?php echo $file?>">
                                                <?php echo $file; } ?>
                                            </option>
                                    <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="file" id="files" name="file" /> 
                                </td>
                                <td>
                                    <button id="upload" type="button">Upload File</button> <p id="result"></p>
                                </td>
                            <?php } ?>
                        </tr>
                       <?php }?>
                    </table>
                </div>
                </br>
                <div style="margin: 0 auto;">
                    <input style="padding-left: 40px;padding-right: 40px; margin-left: 100px;" 
                           type="submit" value="Run" name="submit">
                </div>
        </form>
            <div>
                <fieldset>
                    <legend>Output</legend>
                    <p><?php echo '<b>Output: </b>' . $output; ?></p>
                    <p><?php echo '<b>Shell Execute Command: </b>' . shell_exec($command); ?></p>
                    <p><?php echo '<b>Command: </b>' . $command; ?></p>
                </fieldset>
            </div>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>
