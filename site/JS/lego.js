function draw(){
    bodys();
    legs();
    headd();
    hands();
    eyes();
    mouth();
}
function kutstuta(){
    var t=document.getElementById("zombie").getContext("2d");
    t.clearRect(0,0, 400, 400); //x,y, laius, kõrgus
}

function legs(){
    var t=document.getElementById("zombie").getContext("2d");
    t.fillStyle="blue";
    t.fillRect(100,98, 30, 70);
    t.fillStyle="blue";
    t.fillRect(120,98, 40, 20);
    t.fillStyle="blue";
    t.fillRect(140,98, 30, 70);
    t.fillStyle="rgb(0, 0, 138)";
    t.fillRect(140,140, 30, 10);
    t.fillStyle="rgb(0, 0, 138)";
    t.fillRect(100,140, 30, 10);

}
function bodys(){
    var t=document.getElementById("zombie").getContext("2d");
    var b=document.getElementById("zombie").getContext("2d");
    var c=document.getElementById("zombie").getContext("2d");
    var b=document.getElementById("zombie").getContext("2d");


    t.beginPath();
    t.strokeStyle="rgb(0, 168, 255)";
    t.lineWidth=18;
    t.moveTo(100, 100); //x,y alguspunkt
    t.lineTo(110, 60); //x,y lõppunkt
    t.stroke();

    /* a.strokeStyle="rgb(0, 168, 255)";
    a.lineWidth=3;
    a.moveTo(105, 100); //x,y alguspunkt
    a.lineTo(110, 60); //x,y lõppunkt
    a.stroke();

    f.strokeStyle="rgb(0, 168, 255)";
    f.lineWidth=3;
    f.moveTo(105, 100); //x,y alguspunkt
    f.lineTo(110, 60); //x,y lõppunkt
    f.stroke(); */

    b.beginPath();
    b.strokeStyle="rgb(0, 168, 255)";
    b.lineWidth=18;
    b.moveTo(170, 100); //x,y alguspunkt
    b.lineTo(160, 60); //x,y lõppunkt
    b.stroke();

    c.beginPath();
    c.strokeStyle="rgb(0, 168, 255)";
    c.lineWidth=3;
    c.moveTo(105, 60); //x,y alguspunkt
    c.lineTo(165, 60); //x,y lõppunkt
    c.stroke();

    b.fillStyle="rgb(0, 168, 255)";
    b.fillRect(110,60, 50, 40);

}
function headd(){
    var t=document.getElementById("zombie").getContext("2d");
    t.fillStyle="green";
    t.fillRect(110,35, 50, 25);
}
function hands(){
    var t=document.getElementById("zombie").getContext("2d");
    var b=document.getElementById("zombie").getContext("2d");
    var c=document.getElementById("zombie").getContext("2d");

    var a=document.getElementById("zombie").getContext("2d");
    var d=document.getElementById("zombie").getContext("2d");
    var s=document.getElementById("zombie").getContext("2d");




    t.fillStyle="rgb(0, 168, 255)";
    t.fillRect(80,58, 60, 10);
    t.fillStyle="rgb(0, 168, 255)";
    t.fillRect(70,58, 15, 30);
    b.beginPath();
    b.strokeStyle="green";
    b.fillStyle="green";
    b.arc(77, 90, 7, 0, 2*Math.PI, true);//x, y, R arc-duga
    b.fill();

    c.beginPath();
    c.strokeStyle="white";
    c.fillStyle="white";
    c.arc(77, 94, 5, 0, 2*Math.PI, true);//x, y, R arc-duga
    c.fill();

    a.fillStyle="rgb(0, 168, 255)";
    a.fillRect(135,58, 60, 10);
    a.fillStyle="rgb(0, 168, 255)";
    a.fillRect(180,58, 15, 30);
    d.beginPath();
    d.strokeStyle="green";
    d.fillStyle="green";
    d.arc(187.5, 90, 7, 0, 2*Math.PI, true);//x, y, R arc-duga
    d.fill();

    s.beginPath();
    s.strokeStyle="white";
    s.fillStyle="white";
    s.arc(187.5, 94, 5, 0, 2*Math.PI, true);//x, y, R arc-duga
    s.fill();

}
function eyes(){
    var t=document.getElementById("zombie").getContext("2d");
    t.fillStyle="rgb(78, 80, 0)";
    t.fillRect(120,42, 12, 5);
    t.fillStyle="rgb(78, 80, 0)";
    t.fillRect(145,42, 12, 5);

}
function mouth(){
    var t=document.getElementById("zombie").getContext("2d");

    t.fillStyle="rgb(17, 12, 0)";
    t.fillRect(126,50, 20, 5);
}