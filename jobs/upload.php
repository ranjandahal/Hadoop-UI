<script>
/*function showHint(str) {
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
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}*/
    $(document).ready(function(){
        $('#1k').click(function(){
            $('#result').html('Uploading...');
            readParts(0, 1024);
        });

        $('#1m').click(function(){
            $('#result').html('Uploading...');
            readParts(0, 1024*1024);
        });

        $('#whole').click(function(){
            $('#result').html('Uploading...');
            readParts(0, document.getElementById('files').files[0].size - 1);

        });

        function readParts(myStart, myEnd) {
            var files = document.getElementById('files').files;
            var file = files[0];
            var reader = new FileReader();
            var myblob = file.slice(myStart, myEnd);

            switch (myEnd) {
                case 1024:
                    var myExt = ".1k";
                    break;
                case 1024*1024:
                    var myExt = ".1m"
                    break;
                default:
                    var myExt = "";
            }
            reader.readAsBinaryString(myblob);
            reader.onloadend = function(evt) {
                if (evt.target.readyState == FileReader.DONE) {
                    var myresult = evt.target.result;
                    $.post("upload.php", {filename: file.name + myExt, data: myresult }).done(function(data) {
                        document.getElementById('result').innerHTML =  "Done.<br /> Log:" + data;
                    });
                }
            }
        }
    });
</script>
<main>
    <section>
        <input type="file" id="files" name="file" /> <br />
        Press size to upload:
        <button id="1k" >1KB</button>
        <button id="1m" >1MB</button>
        <button id="whole" >Whole</button>
        <hr />
        <div id="result"></div>

        <!--<p class="bg-primary" style="font-size: 24px; padding: 10px;">File List</p>
        <h1>Upload File</h1>
        <form action="upload_successful.php" method="post" enctype="multipart/form-data">
            Select File to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>-->
    </section>
</main>
