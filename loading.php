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
  '#2196f3',
  '#f43f5e',
  '#ec4899',
  '#d946ef',
  '#a855f7',

]

setInterval(() => {
  const color = colors[Math.floor(Math.random()*colors.length)]
  document.body.style.setProperty('--background', color)
}, 5000)

 
</script>
</html>
