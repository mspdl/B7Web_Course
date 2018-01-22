var c = document.getElementById("canvas");
var ctx = c.getContext("2d");

/* linha na diagonal

ctx.moveTo(0, 0);
ctx.lineTo(200,200);

*/

ctx.moveTo(100,100);
ctx.lineTo(300,100);

ctx.moveTo(100,300);
ctx.lineTo(300,300);

ctx.moveTo(100,100);
ctx.lineTo(100,300);

ctx.moveTo(300,100);
ctx.lineTo(300,300);

ctx.moveTo(100,100);
ctx.lineTo(300,300);

ctx.moveTo(100,300);
ctx.lineTo(300,100);

ctx.stroke();