
var tilesArray = [];
var posX = 20;
var posY = 20;
var tile = "tile";
var player;
var check;

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
  player = new Component(20, 20, "red", 30, 30);
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
}

function moveright(){
  player.X += 60;
  check = 0;
  posCheck();
  if (check == 0){
    player.X -= 60;
  }
  
}

function moveleft(){
  player.X -= 60;
  check = 0;
  posCheck();
  if (check == 0){
    player.X += 60;
  }
  
}

function moveup(){
  player.Y -= 60;
  check = 0;
  posCheck();
  if (check == 0){
    player.Y += 60;
  }
  
}

function movedown(){
  player.Y += 60;
  check = 0;
  posCheck();
  if (check == 0){
    player.Y -= 60;
  }
  
}

function posCheck(){

  var i;
  for(i = 0; i < tilesArray.length; i ++){
    var playerLeft = player.X;
    var playerRight = player.X + player.Width;
    var playerTop = player.Y;
    var playerBot = player.Y + player.Height;

    var tileLeft = tilesArray[i].X;
    var tileRight = tilesArray[i].X + tilesArray[i].Width;
    var tileTop = tilesArray[i].Y;
    var tileBot = tilesArray[i].Y + tilesArray[i].Height;

    if (playerLeft > tileLeft && playerRight < tileRight && 
        playerTop > tileTop && playerBot < tileBot){
        check = 1;
      }      
    }
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
      var peliarea = document.getElementById('peliarea');
      peliarea.insertBefore(this.canvas, peliarea.firstChild);
      this.interval = setInterval(updateGameArea, 100);
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
