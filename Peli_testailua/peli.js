
function startGame() {
    myGameArea.start();
    //vaakasuorat pelilauta palkit
    myGamePiece = new component(40, 40, "white", 20, 20);
    myGamePiece = new component(40, 40, "white", 80, 20);
    myGamePiece = new component(40, 40, "white", 140, 20);
    myGamePiece = new component(40, 40, "white", 200, 20);
    myGamePiece = new component(40, 40, "white", 260, 20);
    myGamePiece = new component(40, 40, "white", 320, 20);
    myGamePiece = new component(40, 40, "white", 380, 20);
    myGamePiece = new component(40, 40, "white", 440, 20);
    myGamePiece = new component(40, 40, "white", 500, 20);

    myGamePiece = new component(40, 40, "white", 20, 500);
    myGamePiece = new component(40, 40, "white", 80, 500);
    myGamePiece = new component(40, 40, "white", 140, 500);
    myGamePiece = new component(40, 40, "white", 200, 500);
    myGamePiece = new component(40, 40, "white", 260, 500);
    myGamePiece = new component(40, 40, "white", 320, 500);
    myGamePiece = new component(40, 40, "white", 380, 500);
    myGamePiece = new component(40, 40, "white", 440, 500);
    myGamePiece = new component(40, 40, "white", 500, 500);

    // pystysuorat lauta palkit
    myGamePiece = new component(40, 40, "white", 20, 80);
    myGamePiece = new component(40, 40, "white", 20, 140);
    myGamePiece = new component(40, 40, "white", 20, 200);
    myGamePiece = new component(40, 40, "white", 20, 260);
    myGamePiece = new component(40, 40, "white", 20, 320);
    myGamePiece = new component(40, 40, "white", 20, 380);
    myGamePiece = new component(40, 40, "white", 20, 440);
    myGamePiece = new component(40, 40, "white", 20, 500);

    myGamePiece = new component(40, 40, "white", 500, 80);
    myGamePiece = new component(40, 40, "white", 500, 140);
    myGamePiece = new component(40, 40, "white", 500, 200);
    myGamePiece = new component(40, 40, "white", 500, 260);
    myGamePiece = new component(40, 40, "white", 500, 320);
    myGamePiece = new component(40, 40, "white", 500, 380);
    myGamePiece = new component(40, 40, "white", 500, 440);
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 560;
        this.canvas.height = 560;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    ctx = myGameArea.context;
    ctx.fillStyle = color;
    ctx.fillRect(this.x, this.y, this.width, this.height);
  }