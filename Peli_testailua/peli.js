
var tilesArray = [];

function startGame() {
    myGameArea.start();

    var i = 1;
    var posX = parseInt("20");
    var posY = parseInt("20");
    var tile = "tile";
    
    if (posX == 20 && posY == 20){
        while(i < 10){
            var tileName = tile + posX + posY; 
            console.log(tileName);
            tileName = new component(40, 40, "white", posX, 20);
            posX = posX + 60;
            tilesArray.push(tileName)
            console.log(tileName);
            i++;
        }
    } else if (posX == 20 && posY == 500){

    }
    //vaakasuorat pelilauta palkit
    //myGamePiece = new component(40, 40, "white", 20, 20);
    //myGamePiece = new component(40, 40, "white", 80, 20);
    //myGamePiece = new component(40, 40, "white", 140, 20);
    //myGamePiece = new component(40, 40, "white", 200, 20);
    //myGamePiece = new component(40, 40, "white", 260, 20);
    //myGamePiece = new component(40, 40, "white", 320, 20);
    //myGamePiece = new component(40, 40, "white", 380, 20);
    //myGamePiece = new component(40, 40, "white", 440, 20);
    //myGamePiece = new component(40, 40, "white", 500, 20);

    //myGamePiece = new component(40, 40, "white", 20, 500);
    //myGamePiece = new component(40, 40, "white", 80, 500);
    //myGamePiece = new component(40, 40, "white", 140, 500);
    //myGamePiece = new component(40, 40, "white", 200, 500);
    //myGamePiece = new component(40, 40, "white", 260, 500);
    //myGamePiece = new component(40, 40, "white", 320, 500);
    //myGamePiece = new component(40, 40, "white", 380, 500);
    //myGamePiece = new component(40, 40, "white", 440, 500);
    //myGamePiece = new component(40, 40, "white", 500, 500);

    // pystysuorat lauta palkit
    //myGamePiece = new component(40, 40, "white", 20, 80);
    //myGamePiece = new component(40, 40, "white", 20, 140);
    //myGamePiece = new component(40, 40, "white", 20, 200);
    //myGamePiece = new component(40, 40, "white", 20, 260);
    //myGamePiece = new component(40, 40, "white", 20, 320);
    //myGamePiece = new component(40, 40, "white", 20, 380);
    //myGamePiece = new component(40, 40, "white", 20, 440);
    //myGamePiece = new component(40, 40, "white", 20, 500);

    //myGamePiece = new component(40, 40, "white", 500, 80);
    //myGamePiece = new component(40, 40, "white", 500, 140);
    //myGamePiece = new component(40, 40, "white", 500, 200);
    //myGamePiece = new component(40, 40, "white", 500, 260);
    //myGamePiece = new component(40, 40, "white", 500, 320);
    //myGamePiece = new component(40, 40, "white", 500, 380);
    //myGamePiece = new component(40, 40, "white", 500, 440);
    
    //pelaaja
    player = new component(20, 20, "red", 20, 20);
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 560;
        this.canvas.height = 560;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
      this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    this.update = function(){
    ctx = myGameArea.context;
    ctx.fillStyle = color;
    ctx.fillRect(this.x, this.y, this.width, this.height);
    }
}
function updateGameArea() {
    myGameArea.clear();
    var i = 0; 
    while(i < 9){
        //tile = tilesArray[i];
        tilesArray[i].update();        
        //console.log(tilesArray[i]);
        i++;

    }
    player.update();
 
  }