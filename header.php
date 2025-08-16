<?php
// Load submissions from text file
$submissions = [];
if (file_exists("submissions.txt")) {
    $lines = file("submissions.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $data = explode("|", $line);
        if (count($data) == 5) { // author, title, email, filename, abstract
            $submissions[] = $data;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PMRP Journal of Engineering Research – Part A: Computational Engineering</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="topbar">
    <span>ISSN: request pending</span>
    <span>Peer-reviewed | Open Access | Indexed</span>
  </div>
  <div class="container nav-area">
    <h1>PMRP Journal of Engineering Research Part A: Computational Engineering</h1>
  </div>
  <div class="navstyle" align="center">
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About the Journal</a>
      <a href="news.php">News</a>
      <a href="abstract.php">Indexing & Abstracting</a>
      <a href="editorboard.php">Editorial Board</a>
      <a href="instruction.php">Instructions for Authors</a>
      <a href="submit.php">Submit Paper</a>
      <a href="processing.php">Article Processing Charges</a>

      <a href="office.php">Editorial Office</a>
      
    </nav>
  </div>
</header>