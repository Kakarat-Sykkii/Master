
var tilesArray = [];
var posX = parseInt("20");
var posY = parseInt("20");
var tile = "tile";

//alussa luodaan pelin komponentit
function startGame() {
    myGameArea.start();

            //ylempi vaakasuora laatta rivi    
            var i = 1;
            while(i < 11){
                var tileName = tile + posX + posY; 
                console.log(tileName);
                tileName = new component(40, 40, "white", posX, posY);
                posX = posX + 60;
                tilesArray.push(tileName)
                console.log(tileName);
                i++;
            }

            //alempi vaakasuora laatta rivi    
            i = 1;
            posX = 20;
            posY = 560;
            while(i < 11){
                var tileName = tile + posX + posY; 
                console.log(tileName);
                tileName = new component(40, 40, "white", posX, posY);
                posX = posX + 60;
                tilesArray.push(tileName)
                console.log(tileName);
                i++;
            }

            // vasen laatta palkki    
            i = 1;
            posX = 20;
            posY = 20;
            while(i < 11){
                var tileName = tile + posX + posY; 
                console.log(tileName);
                tileName = new component(40, 40, "white", posX, posY);
                posY = posY + 60;
                tilesArray.push(tileName)
                console.log(tileName);
                i++;
            }
            
            // oikea laatta palkki    
            i = 1;
            posX = 560;
            posY = 20;
            while(i < 11){
                var tileName = tile + posX + posY; 
                console.log(tileName);
                tileName = new component(40, 40, "white", posX, posY);
                posY = posY + 60;
                tilesArray.push(tileName)
                console.log(tileName);
                i++;
            }


    console.log(tilesArray.length)
   
    //pelaaja
    player = new component(20, 20, "red", 20, 20);
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
    var tileCount = 0;
    tileCount = tilesArray.length;
    var i; 
    for (i =0; i < tilesArray.length; i++){
        tilesArray[i].update();
        //console.log(tilesArray[i]);

    }
    player.update();
 
  }
  
  var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 620;
        this.canvas.height = 620;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
      this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}
