<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cards.css">
    <title> 2D Video </title>
	<link rel="icon" type="image/x-icon" href="./pics/logo.png">
</head>
<body>
    
<div class="toggle">
        <a href="home.php" class="material-symbols-outlined">
arrow_back
</a>
    </div>

<div class="area" >
<div class="wrapper">
<h1><span>A</span><span>R</span><span>A</span><span>L</span><span>I</span><span>N 1:</span><span> </span><span>A</span><span>L</span><span>P</span><span>A</span><span>B</span><span>E</span><span>T</span><span>O</span><span>N</span><span>G</span>
<span> </span><span>P</span><span>I</span><span>L</span><span>I</span><span>P</span><span>I</span><span>N</span><span>O</span>
</h1>
<h2> Ang mga letrang inyong nakikita ay mga salitang bumubuo sa ALPABETONG PILIPINO </h2>

<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

            </ul>
            
  <div class="cols">
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #9AC5F4">
						<div class="inner">
							<p>Aa</p>
                           <button id="playButtonA" class="button-35" role="button" onclick="playSound('audioA')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
                            </button>

							<audio id="audioA" src="./sound/Letter A.MP3"></audio>
						</div>
					</div>
					<div class="back">
						
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FDF7C3">
						<div class="inner">
							<p>Bb</p>
                            <button id="playButtonB" class="button-35" role="button" onclick="playSound('audioB')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioB" src="./sound/Letter B.MP3"></audio>
						</div>
					</div>
					<div class="back">
						
					</div>
				</div>
			</div>
	
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FFB4B4">
						<div class="inner">
							<p>Cc</p>
							<button id="playButtonC" class="button-35" role="button" onclick="playSound('audioC')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioC" src="./sound/Letter C.MP3"></audio>
						</div>
					</div>
					<div class="back">
						
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #B2A4FF">
						<div class="inner">
							<p>Dd</p>
							<button id="playButtonD" class="button-35" role="button" onclick="playSound('audioD')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioD" src="./sound/Letter D.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col">
				<div class="container">
					<div class="front" style="background-color: #DFCCFB">
						<div class="inner">
							<p>Ee</p>
                            <button id="playButtonE" class="button-35" role="button" onclick="playSound('audioE')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioE" src="./sound/Letter E.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col">
				<div class="container">
					<div class="front" style="background-color: #8DDFCB">
						<div class="inner">
							<p>Ff</p>
							<button id="playButtonF" class="button-35" role="button" onclick="playSound('audioF')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioF" src="./sound/Letter F.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FFA1F5">
						<div class="inner">
							<p>Gg</p>
							<button id="playButtonG" class="button-35" role="button" onclick="playSound('audioG')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioG" src="./sound/Letter G.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #F8FF95">
						<div class="inner">
							<p>Hh</p>
							<button id="playButtonH" class="button-35" role="button" onclick="playSound('audioH')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioH" src="./sound/Letter H.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #C8E4B2">
						<div class="inner">
							<p>Ii</p>
							<button id="playButtonI" class="button-35" role="button" onclick="playSound('audioI')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioI" src="./sound/Letter I.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #33BBC5">
						<div class="inner">
							<p>Jj</p>
							<button id="playButtonJ" class="button-35" role="button" onclick="playSound('audioJ')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioJ" src="./sound/Letter J.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #85E6C5">
						<div class="inner">
							<p>Kk</p>
                            <button id="playButtonK" class="button-35" role="button" onclick="playSound('audioK')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioK" src="./sound/Letter K.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FCBAAD">
						<div class="inner">
							<p>Ll</p>
                            <button id="playButtonL" class="button-35" role="button" onclick="playSound('audioL')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioL" src="./sound/Letter L.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FBA1B7">
						<div class="inner">
							<p>Mm</p>
                            <button id="playButtonM" class="button-35" role="button" onclick="playSound('audioM')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioM" src="./sound/Letter M.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FFD9C0">
						<div class="inner">
							<p>Nn</p>
							<button id="playButtonN" class="button-35" role="button" onclick="playSound('audioN')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioN" src="./sound/Letter N.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #9AC5F4">
						<div class="inner">
							<p>Ññ</p>
							<button id="playButtonÑ" class="button-35" role="button" onclick="playSound('audioÑ')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioÑ" src="./sound/Letter Ñ.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #A7ECEE">
						<div class="inner">
							<p>Oo</p>
                            <button id="playButtonO" class="button-35" role="button" onclick="playSound('audioO')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioO" src="./sound/Letter O.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FF8989">
						<div class="inner">
							<p>Pp</p>
                            <button id="playButtonP" class="button-35" role="button" onclick="playSound('audioP')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioP" src="./sound/Letter P.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #98EECC">
						<div class="inner">
							<p>Qq</p>
                            <button id="playButtonQ" class="button-35" role="button" onclick="playSound('audioQ')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioQ" src="./sound/Letter Q.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #B6EAFA">
						<div class="inner">
							<p>Rr</p>
                            <button id="playButtonR" class="button-35" role="button" onclick="playSound('audioR')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioR" src="./sound/Letter R.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #6DA9E4">
						<div class="inner">
							<p>Ss</p>
							<button id="playButtonS" class="button-35" role="button" onclick="playSound('audioS')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioS" src="./sound/Letter S.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FFF9DE">
						<div class="inner">
							<p>Tt</p>
                            <button id="playButtonT" class="button-35" role="button" onclick="playSound('audioT')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioT" src="./sound/Letter T.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FDF7C3">
						<div class="inner">
							<p>Uu</p>
                            <button id="playButtonU" class="button-35" role="button" onclick="playSound('audioU')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioU" src="./sound/Letter U.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #FFB4B4">
						<div class="inner">
							<p>Vv</p>
							<button id="playButtonV" class="button-35" role="button" onclick="playSound('audioV')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioV" src="./sound/Letter V.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #B2A4FF">
						<div class="inner">
							<p>Ww</p>
                            <button id="playButtonW" class="button-35" role="button" onclick="playSound('audioW')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioW" src="./sound/Letter W.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #8DDFCB">
						<div class="inner">
							<p>Xx</p>
							<button id="playButtonX" class="button-35" role="button" onclick="playSound('audioX')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioX" src="./sound/Letter X.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #E8A0BF">
						<div class="inner">
							<p>Yy</p>
                            <button id="playButtonY" class="button-35" role="button" onclick="playSound('audioY')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioY" src="./sound/Letter Y.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-color: #B0DAFF">
						<div class="inner">
							<p>Zz</p>
                            <button id="playButtonZ" class="button-35" role="button" onclick="playSound('audioZ')"> <span class="material-symbols-outlined"> volume_up</span> Pangalan ng Letra </button>
							
							<audio id="audioZ" src="./sound/Letter Z.MP3"></audio>
						</div>
					</div>
					<div class="back">
                    </div>
                </div>
            </div>
			</div>
			<div class="card">
		<a href="videos.php">
        <button id="startButton"> ABAKADA </button>
        </a>


<script>
     function playSound(audioId) {
    const audio = document.getElementById(audioId);
    
    // Pause any currently playing audio
    const allAudio = document.querySelectorAll('audio');
    allAudio.forEach((a) => {
        if (a.id !== audioId) {
            a.pause();
            a.currentTime = 0;
        }
    });

    // Play the selected audio
    if (audio) {
        audio.currentTime = 0;
        audio.play();
    }
}
    </script>

</body>
</html>		
		