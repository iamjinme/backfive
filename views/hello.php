<?php
$this->layout('main', [
  'title' => 'Hello with BackFive!',
  'time' => $this->e($time),
  'memory' => $this->e($memory)
])
?>

<div class="container">
  <h1 class="title">
    Hello, <?=$this->e($name)?>
  </h1>
  <p class="subtitle">
    Your first website with <strong>BackFive</strong> Boilerplate!
  </p>
  <p class="subtitle">
    BackFive Boilerplate has <a href="https://www.slimframework.com/docs/v2/index.html">Slim2</a>,
    <a href="http://platesphp.com/v3/">Plates3</a>, <a href="https://github.com/j4mie/paris">Paris Active Record</a>
    and <a href="https://bulma.io/">Bulma CSS framework</a><sup>(optional)</sup>
    <h5>Lightweight framework <i>(less than 800kB)</i> focused on simplicity, performance and compatibility with PHP since 5.3 version.</h5>
  </p>
</div>
