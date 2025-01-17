<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Recall - Create Flashcard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="createFlashcard.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <div class="card shadow-lg border-0 p-4">
        <div class="d-flex justify-content-between mb-4">
            <button class="btn btn-secondary" onclick="history.back()">Back</button>
            <button type="reset" class="btn btn-danger" form="flashcardForm">Close</button>
        </div>
        <h3 class="text-center mb-4">Create a new Flashcard Set</h3>
        <form id="flashcardForm" onsubmit="validateForm(event)">
            <div class="mb-3">
                <label for="setTitle" class="form-label fw-bold">Set Title</label>
                <input type="text" class="form-control" id="setTitle" placeholder="Enter set title" required>
            </div>
            <div class="mb-3">
                <label for="setDescription" class="form-label fw-bold">Set Description</label>
                <textarea class="form-control" id="setDescription" rows="3" placeholder="Enter a brief description" required></textarea>
            </div>
            <div id="flashcards">
            </div>
            <button type="button" class="btn btn-outline-success w-100 my-3" onclick="addCard()">Add More Card</button>
            <button type="submit" class="btn btn-primary-submit w-100">Create Flashcard Set</button>
        </form>
    </div>
</div>

<script>
    let cardCounter = 5;

    function initializeCards() {
        for (let i = 1; i <= 5; i++) {
            addCard(true, i); 
        }
    }

    // Function to add a new card
    function addCard(initial = false, cardIndex = null) {
        const flashcardsDiv = document.getElementById("flashcards");
        const cardNumber = cardIndex || cardCounter + 1; 

        const cardHTML = `
            <div class="card-item border p-3 mb-3 rounded">
                <h6 class="fw-bold">Card ${cardNumber}</h6>
                <div class="d-flex gap-3">
                    <div class="mb-3 flex-grow-1">
                        <label for="term${cardNumber}" class="form-label fw-bold">Term</label>
                        <input type="text" class="form-control" id="term${cardNumber}" placeholder="Enter term" required>
                    </div>
                    <div class="mb-3 flex-grow-1">
                        <label for="definition${cardNumber}" class="form-label fw-bold">Definition</label>
                        <textarea class="form-control" id="definition${cardNumber}" rows="2" placeholder="Enter definition" required></textarea>
                    </div>
                </div>
            </div>
        `;
        flashcardsDiv.insertAdjacentHTML("beforeend", cardHTML);

        if (!initial) {
            cardCounter++; 
        }
    }

    // Validate form fields
    function validateForm(event) {
        const inputs = document.querySelectorAll('input[required], textarea[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            alert("Please fill out all fields before submitting.");
            event.preventDefault();
        }
    }

    document.addEventListener("DOMContentLoaded", initializeCards);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
