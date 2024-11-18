const flashcards = [
    { term: "Term 1", definition: "Definition 1" },
    { term: "Term 2", definition: "Definition 2" },
    { term: "Term 3", definition: "Definition 3" },
    { term: "Term 4", definition: "Definition 4" },
    { term: "Term 5", definition: "Definition 5" }
];

let currentIndex = 0;

const termEl = document.getElementById("flashcard-term");
const definitionEl = document.getElementById("flashcard-definition");
const flipBtn = document.getElementById("flip-btn");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const flashcard = document.querySelector(".flashcard");

function updateFlashcard() {
    termEl.textContent = flashcards[currentIndex].term;
    definitionEl.textContent = flashcards[currentIndex].definition;

    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === flashcards.length - 1;

    if (flashcard.classList.contains("flipped")) {
        flashcard.classList.remove("flipped");
    }
}

flipBtn.addEventListener("click", () => {
    flashcard.classList.toggle("flipped");
});

prevBtn.addEventListener("click", () => {
    currentIndex--;
    updateFlashcard();
});

nextBtn.addEventListener("click", () => {
    currentIndex++;
    updateFlashcard();
});

updateFlashcard();

