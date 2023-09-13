<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Spinner Example</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<h2>TUKLASKO</h2>

<a href="home.php">
<button id="startButton"> MAGSIMULA </button>
</a>
        
</body>
<script>

const colors = [
  '#33BBC5',
  '#D0BFFF',
  '#BEADFA',
  '#DFCCFB',
  '#DFCCFB',

]

setInterval(() => {
  const color = colors[Math.floor(Math.random()*colors.length)]
  document.body.style.setProperty('--background', color)
}, 5000)

 
</script>
</html>
