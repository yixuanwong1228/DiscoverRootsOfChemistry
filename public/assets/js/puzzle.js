var puzzlename = document.getElementById('puzzlename').value;

var rows = 3;
var columns = 3;
var currTile;
var otherTile;
var turns = 0;
var correctOrder = []; // Store the correct order of tiles

window.onload = function() {
    var puzzleContainer = document.getElementById("board");
    var piecesContainer = document.getElementById("pieces");

    // Initialize the 3x3 board
    for (let r = 0; r < rows; r++) {
        for (let c = 0; c < columns; c++) {
            let tile = document.createElement("img");
            tile.src = "/assets/img/Puzzle/blank.jpg";
            tile.className = 'puzzle-piece';
            tile.dataset.position = r + '-' + c; // Store the position

            tile.addEventListener("dragstart", dragStart);
            tile.addEventListener("dragover", dragOver);
            tile.addEventListener("dragenter", dragEnter);
            tile.addEventListener("dragleave", dragLeave);
            tile.addEventListener("drop", dragDrop);
            tile.addEventListener("dragend", dragEnd);

            puzzleContainer.appendChild(tile);
        }
    }

    // Initialize the pieces
    let pieces = [];
    for (let i = 1; i <= rows * columns; i++) {
        pieces.push(i.toString());
    }

    pieces = pieces.sort(() => Math.random() - 0.5);

    for (let i = 0; i < pieces.length; i++) {
        let tile = document.createElement("img");
        tile.src = `/assets/img/Puzzle/${puzzlename}/` + pieces[i] + ".jpg";
        tile.className = 'puzzle-piece';
        tile.dataset.number = pieces[i]; // Store the tile number

        tile.addEventListener("dragstart", dragStart);
        tile.addEventListener("dragover", dragOver);
        tile.addEventListener("dragenter", dragEnter);
        tile.addEventListener("dragleave", dragLeave);
        tile.addEventListener("drop", dragDrop);
        tile.addEventListener("dragend", dragEnd);

        piecesContainer.appendChild(tile);
    }

    // Define the correct order for a 3x3 puzzle
    correctOrder = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
}

// DRAG TILES
function dragStart() {
    currTile = this;
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
}

function dragLeave() {}

function dragDrop() {
    otherTile = this;
}

function dragEnd() {
    if (currTile.src.includes("blank") ) {
        return;
    }

    // Swap images between the current tile and the other tile
    let currImg = currTile.src;
    let otherImg = otherTile.src;
    currTile.src = otherImg;
    otherTile.src = currImg;

    // Increment the turn counter
    turns += 1;
    document.getElementById("turns").innerText = turns;

    checkPuzzle(); // Check if the puzzle is solved
}

// Function to check if the puzzle is solved
function checkPuzzle() {
    let tiles = Array.from(document.getElementById("board").getElementsByClassName('puzzle-piece'));
    let order = tiles.map(tile => {
        if (tile.src.includes("blank")) {
            return 'blank';
        }
        return tile.src.split('/').pop().split('.').shift();
    });

    // Filter out blank tiles for checking
    let currentOrder = order.filter(value => value !== 'blank');

    if (JSON.stringify(currentOrder) === JSON.stringify(correctOrder)) {
        Swal.fire({
            icon: 'success',
            title: 'Congratulations!',
            text: "You've solved the puzzle!",
            confirmButtonText: 'OK'
        });
    }
}
