<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Arrangement Puzzle</title>
    <style>

        .word-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .word {
            padding: 20px;
            background-color: #f0f0f0;
            cursor: pointer;
        }

        #drop-target {
            border: 2px dashed #333;
            padding: 20px;
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h1>Word Arrangement Puzzle</h1>
    <div class="word-container" id="word-container">
        <div class="word" draggable="true">Hello</div>
        <div class="word" draggable="true">World</div>
        <div class="word" draggable="true">This</div>
        <div class="word" draggable="true">Is</div>
        <div class="word" draggable="true">A</div>
        <div class="word" draggable="true">Puzzle</div>
    </div>
    <br>
    <div id="drop-target">
        Arrange the words here
    </div>

    <script>
        const wordContainer = document.getElementById('word-container');
        const dropTarget = document.getElementById('drop-target');

        let draggedWord = null;

        wordContainer.addEventListener('dragstart', (e) => {
            draggedWord = e.target;
        });

        wordContainer.addEventListener('dragend', () => {
            draggedWord = null;
        });

        dropTarget.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        dropTarget.addEventListener('dragenter', (e) => {
            e.preventDefault();
            dropTarget.style.backgroundColor = 'lightgray';
        });

        dropTarget.addEventListener('dragleave', () => {
            dropTarget.style.backgroundColor = '';
        });

        dropTarget.addEventListener('drop', (e) => {
            e.preventDefault();
            dropTarget.style.backgroundColor = '';
            if (draggedWord) {
                dropTarget.appendChild(draggedWord);
            }
        });
    </script>
</body>
</html>