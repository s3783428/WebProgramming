<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Righteous&display=swap" rel="stylesheet">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div id="tital"><img id="logo" src="../../media/moviehouse.png" alt="Logo of Lunardo Cinema">Lunardo</div>
    </header>

    <nav>
      <ul class="navList">
        <li class="navItem">a</li>
        <li class="navItem">b</li>
        <li class="navItem">c</li>
      </ul>
    </nav>

    <main>
      <article id='Website Under Construction'>
          <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
          <!-- <img src='../../media/website-under-construction.png' alt='Website Under Construction' /> -->
        </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Guy Witherow s3783428, Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
