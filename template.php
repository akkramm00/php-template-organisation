
<html>
  <head></head>
  <body>
    <h1>
      <?php echo WELCOME_TEXT. ' ' .$user['name'] . ' !' ?>
    </h1>
    <div>
      <?php echo SPORTS_TEXT. ' :'; ?>
    <ul>
      <?php
        foreach ($user['hobbies'] as $hobby)
        {
          if($hobby['type'] == 'sport') {
            echo '<li>' .$hobby['name'] .'</li>' ;
          }
        }
      ?>
     </ul>
    </div>
  </body>
</html>

