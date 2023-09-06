<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Spinner Example</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
<div class = 'container projects'>
   <h1>Tuklas-KO!</h1>
<div class="overlay">


<button id="startButton"> MAGSIMULA </button>
    <div class="loader-container">
        <div class="loader" id="loader"></div>
    </div>
</div>
        
</body>
<script>
const startButton = document.getElementById('startButton');
const loaderContainer = document.querySelector('.loader-container');
const loader = document.getElementById('loader');

startButton.addEventListener('click', () => {
    // Display the loading bar
    loaderContainer.style.display = 'block';

    // Simulate loading (set timeout for demonstration purposes)
    simulateLoading();
});

function simulateLoading() {
    let progress = 0;
    const interval = setInterval(() => {
        progress += 1;
        loader.style.borderTop = `16px solid #3498db`;
        loader.style.borderRight = `16px solid transparent`;
        loader.style.transform = `translate(-50%, -50%) rotate(${progress * 3.6}deg)`;

        if (progress >= 100) {
            clearInterval(interval);

            // Redirect to the next page after loading is complete
            window.location.href = 'home.php';
        }
    }, 50);
}
 
</script>
</html>
