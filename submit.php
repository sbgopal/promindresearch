<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = trim($_POST['author']);
    $title = trim($_POST['title']);
    $email = trim($_POST['email']);
    $abstract = trim($_POST['abstract']);
    $fileName = "";

    if (!empty($author) && !empty($title) && !empty($email) && !empty($abstract) && isset($_FILES['paper'])) {
        $uploadDir = "uploads/";
        $fileName = time() . "_" . basename($_FILES["paper"]["name"]);
        $targetFile = $uploadDir . $fileName;

        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($fileType == "pdf") {
            if (move_uploaded_file($_FILES["paper"]["tmp_name"], $targetFile)) {
                file_put_contents("submissions.txt", "$author|$title|$email|$fileName|$abstract\n", FILE_APPEND);
                $message = "✅ Your paper has been submitted successfully!";
            } else {
                $message = "❌ Error uploading the file.";
            }
        } else {
            $message = "❌ Only PDF files are allowed.";
        }
    } else {
        $message = "⚠ Please fill in all fields and upload a PDF.";
    }
}
?>
<?php include 'header.php';?>

<main class="container">
  <h2>Paper Submission</h2>
  <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>

  <form action="submit.php" method="POST" enctype="multipart/form-data" class="submit-form">
    <label>Author Name(s):</label>
    <input type="text" name="author" required>

    <label>Paper Title:</label>
    <input type="text" name="title" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Abstract:</label>
    <textarea name="abstract" rows="5" required></textarea>

    <label>Upload PDF:</label>
    <input type="file" name="paper" accept="application/pdf" required>

    <button type="submit">Submit Paper</button>
  </form>
</main>
<?php include 'footer.php';?>
