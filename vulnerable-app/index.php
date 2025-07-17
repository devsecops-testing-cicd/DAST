<?php
$name = $_GET['name']  ?? '';
$cmd  = $_GET['a']   ?? '';
$greeting = $name ? "Hello, $name!" : '';
$cmdOutput = "";
if (!empty($cmd)) {
  $cmdOutput = exec($cmd);
?>
<html>
<head><title>Super‑Insecure PHP Demo</title></head>
<body>
  <h1>Super‑Insecure PHP Demo</h1>
  <form method="GET">
    <label>Your name: <input name="name"></label>
    <button>Say hi</button>
  </form>
  <p><?= $greeting ?></p>
  <h2>Run a shell command</h2>
  <form>
    <input name="a">
    <button>Run</button>
  </form>
  <pre><?= htmlspecialchars($cmdOutput)?></pre>
</body></html>
