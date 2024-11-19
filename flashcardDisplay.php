<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Quick Recall - Flashcard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="flashcardDisplay.css">
</head>
<body>
    <div class="container d-flex flex-column align-items-center mt-5">
        <button class="btn btn-danger position-absolute top-0 end-0 m-3" id="close-btn">Close</button>
        <div class="flashcard-container">
            <div class="flashcard">
                <div class="front">
                <h3 id="flashcard-term">Term 1</h3>
                </div>
                <div class="back">
                <p id="flashcard-definition">Definition 1</p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button class="btn btn-secondary me-3" id="prev-btn" disabled>&laquo; Previous</button>
            <button class="btn btn-primary" id="flip-btn">Flip</button>
            <button class="btn btn-secondary ms-3" id="next-btn">Next &raquo;</button>
        </div>
    </div>
<script src="flashcardDisplay.js"></script>
</body>
</html>
