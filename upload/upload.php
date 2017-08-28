<?php include '../view/header.php'; ?>
<main>
    <section>
        <p class="bg-primary" style="font-size: 24px; padding: 10px;">File List</p>
        <h1>Upload File</h1>
        <form action="upload_successful.php" method="post" enctype="multipart/form-data">
            Select File to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>