<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="text-center">
      <table class="table w-50 mx-auto text-center">
        <thead>
          <tr>
            <th scope="col">codice fiscale</th>
            <th scope="col">eta</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($_SESSION['registrazioni'] as $key => $eta){
              echo "<tr>";
              echo "<td>$key</td>";
              echo "<td>$eta</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
      <a href="form.html">pagina iniziale</a>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>