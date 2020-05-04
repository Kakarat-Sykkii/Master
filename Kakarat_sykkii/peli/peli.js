
var tilesArray = [];
var posX = 20;
var posY = 20;
var tile = "tile";
var player;
var check;
var dice = 0;
const image = document.getElementById('source');
var counter = 0;

//alussa luodaan pelin komponentit
function startGame() {
  myGameArea.start();

  //ylempi vaakasuora laatta rivi    
  var i = 1;
  while(i < 11){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY, false);
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
      tileName = new Component(40, 40, "white", posX, posY, false);
      posX = posX + 60;
      tilesArray.push(tileName)
      i++;
  }
  
  i = 1;
  posX = 20;
  posY = 1160;
  while(i < 11){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY, false);
      posX = posX + 60;
      tilesArray.push(tileName)
      i++;
  }

  // vasen laatta palkki    
  i = 1;
  posX = 20;
  posY = 80;
  while(i < 20){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY, false);
      posY = posY + 60;
      tilesArray.push(tileName)
      i++;
  }
  
  // oikea laatta palkki    
  i = 1;
  posX = 560;
  posY = 80;
  while(i < 20){
      var tileName = tile + posX + posY; 
      tileName = new Component(40, 40, "white", posX, posY, false);
      posY = posY + 60;
      tilesArray.push(tileName)
      i++;
  }
  //console.log(tilesArray);
  //pelaaja
  player = new Component(20, 20, "red", 30, 30);
}

// W3schoolsilta kopioitu jolla luodaan canvasille kappale + gettterit ja setterit
class Component {
  constructor(width, height, color, x, y, visited) {
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    this.color = color;
    //getteri ja setteri
    this.visited = visited;
  }

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

function save(){
    //tallennetaan array ajaxin avulla
    tilesArray[0].visited = true;
    var talletettavaJson = JSON.stringify(tilesArray);
    fetch('peli/apit/tallenna.php/?data=' + talletettavaJson)
    
    .then((response) => {
    return response.json();
    })

    .then((vastaus) => {  
      //document.getElementById("talletettava").innerHTML = "onnistuiko tallennus " + vastaus;
      tilesArray = JSON.parse(vastaus[0]);
      });
  }
function getsave(){
  //haetaan tallennus
  //var talletettavaJson = JSON.stringify(tilesArray);
  //apit hakemisto ja sinne tallenna.php
  fetch('apit/lue.php')
  .then((response) => {
    return response.json();
  
  })
  
  .then((vastaus) => {  
    //document.getElementById("talletettu").innerHTML = "tallettettu " + JSON.stringify(vastaus);
    tilesArray = vastaus;
    });
}



function moveright(){
  counter ++;
  if(dice > 0){
    player.X += 60;
    check = 0;
    posCheck();
    if (check == 0){
      player.X -= 60;
    } if (check == 1){
      dice--;
    }
  }
}

function moveleft(){
  if(dice > 0){
    player.X -= 60;
    check = 0;
    posCheck();
    if (check == 0){
      player.X += 60;
    } if (check == 1){
      dice--;
    }
  }
}

function moveup(){
  if(dice > 0){
    player.Y -= 60;
    check = 0;
    posCheck();
    if (check == 0){
      player.Y += 60;
    } if (check == 1){
      dice --;
    }
  }
}

function movedown(){
  if(dice > 0){
    player.Y += 60;
    check = 0;
    posCheck();
    if (check == 0){
      player.Y -= 60;
    } if (check == 1){
      dice--;
    }
  }
}

//katotaan onko pelaaja pelilaatalla 
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

// PIENET VITUN KIRJAIMET!!!!!
function update(tileObject){
ctx = myGameArea.context;
ctx.fillStyle = tileObject.color;
ctx.fillRect(tileObject.x, tileObject.y, tileObject.width, tileObject.height);
}

var myGameArea = {
  canvas : document.createElement("canvas"),
  start : function() {
      this.canvas.width = 620;
      this.canvas.height = 1240;
      this.context = this.canvas.getContext("2d");
      var peliarea = document.getElementById('peliarea');
      peliarea.insertBefore(this.canvas, peliarea.firstChild);
      this.interval = setInterval(updateGameArea, 1000);
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
    ctx.fillStyle = tilesArray[i].color;
    ctx.fillRect(tilesArray[i].x, tilesArray[i].y, tilesArray[i].width, tilesArray[i].height);
  }
  update(player);
  document.getElementById("liikkuminen").innerHTML = "pystyt tekemään " + dice + " siirtoa";  
}
  
function Dice(){
  if (dice == 0){
    dice = Math.floor(Math.random()*6)+1;
  }
}    
