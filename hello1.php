<html>
<!– hello1.php -->
<head><title>Hello World</title></head>
<body>
 <p>This is going to be ignored by the PHP interpreter.</p>

   <?php echo '<p>While this is going to be parsed.</p>'; ?>

  <p>This will also be ignored by the PHP preprocessor.</p>

   <?php print('<p>Hello and welcome to <i>my</i> page!</p>');   
    ?>

  <?php

   //This is a comment

  /*
   This is
   a comment
   block
  */
  ?>

</body>
</html> 
