<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php
  $user =  [
    'name' => 'John',
    'language' => 'fr',
    'hobbies' => [
     [  'name' => 'piano',
      'type' => 'music'
     ],
     [
      'name' => 'volley-ball',
      'type' => 'sport'
     ],
     [
      'name' => 'tennis',
      'type' => 'sport'
     ],
     [
      'name' => 'saxophone',
      'type' => 'music'
     ],
   ]
 ];
?>
<html>
  <head></head>
  <body>
    <h1>
      <?php
        if($user['language'] === 'fr')
        {
          echo 'Bonjour '. $user['name'] . '!' ;
        }else{
          echo 'Hello '.$user['name'] ; '!' ;
        }
      ?>
    </h1>
    <div>
      <?php
        if($user['language'] === 'fr') 
        {
          echo 'sport préférés :';
        }else{
          echo 'favorites sports :';
        }
      ?>
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

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>