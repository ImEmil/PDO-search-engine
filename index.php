<?php
  require("app/engine.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>PDO search engine</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <header>
      <h1>PDO search engine</h1>
  </header>

  <main>
    <section>
      
      <form action="" method="GET">
        <input type="text"   name="key" placeholder="Search here" required>
        <input type="submit" value="Search">
      </form>
      
    <?php
      $keyword = null;
      $count = 0;
      if($s->get("key")) {
      $keyword = clean($_GET['key']);
      $found   = $s->search($keyword);
      $count   = count($found);
    }
    ?>

    <aside found="<?php echo $count ." results"; ?>"> You searched for [ <?php echo $keyword; ?> ] </aside>

    <?php
     if($s->get("key") && $count > 0) {

      foreach( $found as $row ) {
      echo "<article> #{$row['id']}  &raquo; {$row['username']} </article>";
    }
  }
?>
    </section>
  </main>

  <footer> PHP search Engine (PDO OOP) By <a href="https://github.com/ImEmil/" target="_blank">ImEmil</a> </footer>

</body>
</html>
