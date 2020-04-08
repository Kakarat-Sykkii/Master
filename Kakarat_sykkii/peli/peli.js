
var tilesArray = [];
var posX = 20;
var posY = 20;
var tile = "tile";
var playerPosX = 30;
var playerPosY = 30;
var player;


//alussa luodaan pelin komponentit
function startGame() {
  myGameArea.start();

  //ylempi vaakasuora laatta rivi    
  var i = 1;
  while(i < 11){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY);
      posX = posX + 60;
      tilesArray.push(tileName)
      i++;
  }
  
  //alempi vaakasuora laatta rivi    
  i = 1;
  posX = 20;
  posY = 560;
  while(i < 11){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY);
      posX = posX + 60;
      tilesArray.push(tileName)
      i++;
  }

  // vasen laatta palkki    
  i = 1;
  posX = 20;
  posY = 80;
  while(i < 9){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY);
      posY = posY + 60;
      tilesArray.push(tileName)
      i++;
  }
  
  // oikea laatta palkki    
  i = 1;
  posX = 560;
  posY = 80;
  while(i < 9){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY);
      posY = posY + 60;
      tilesArray.push(tileName)
      i++;
  }

  //pelaaja
  player = new Component(20, 20, "red", playerPosX, playerPosY);
}

// W3schoolsilta kopioitu jolla luodaan canvasille kappale
class Component {
  constructor(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    this.color = color;}

    get X(){
    return this.x;
   }

   set X (corX){
    this.x = corX;
   }
    
   get Y (){
     return this.y;
   }

   set Y (corY){
     this.y = corY
   }
   
   get Width(){
    return this.width;
   }
    
   get Height (){
     return this.height;
   }

   get Color(){
     return this.color;
   }

  newPos(playerPosX, playerPosY) {
      this.x = playerPosX;
      this.y = playerPosY;
  }
}

function moveright(){
  playerPosX += 60;
  player.X = playerPosX;
}

function moveleft(){
  playerPosX -= 60;
  player.X = playerPosX;
}

function moveup(){
  playerPosY -= 60;
  player.y = playerPosY;
}

function movedown(){
  playerPosY += 60;
  player.Y = playerPosY;
}

function update(tileObject){
ctx = myGameArea.context;
ctx.fillStyle = tileObject.Color;
ctx.fillRect(tileObject.X, tileObject.Y, tileObject.Width, tileObject.Height);
}

var myGameArea = {
  canvas : document.createElement("canvas"),
  start : function() {
      this.canvas.width = 620;
      this.canvas.height = 620;
      this.context = this.canvas.getContext("2d");
      peliarea.insertBefore(this.canvas, pelilauta.firstChild);
      this.interval = setInterval(updateGameArea, 20);
  },
  clear : function() {
    this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
  }
}

// päivitetään peli alueella tapahtuneet muutokset
function updateGameArea() {
  myGameArea.clear();

  ctx = myGameArea.context;
  var i;
  for(i = 0; i < tilesArray.length; i++){
    ctx.fillStyle = tilesArray[i].Color;
    ctx.fillRect(tilesArray[i].X, tilesArray[i].Y, tilesArray[i].Width, tilesArray[i].Height);
  }  
  update(player);   
}   