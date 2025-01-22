<?php

// session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}

session_regenerate_id();
?>

<p>
Hello visitor, you have seen this page <?php echo $_SESSION['count']; ?> times.
</p>
<p>
You are visitor number <?php echo session_id(); ?>
</p>

<p>
To continue, <a href="teste.php">click
here</a>.
</p>