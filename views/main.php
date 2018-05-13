<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <?=$this->section('content')?>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <a href="https://github.com/mirabalj/backfive">BackFive</a> by <a href="http://jinme.co">Jinme Mirabal</a>.
          The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
          Executed in <strong><?=$this->e($time)?> ms</strong>. Memory used <strong><?=$this->e($memory)?></strong>
        </p>
      </div>
    </div>
  </footer>
  </body>
</html>
