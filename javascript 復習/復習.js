document.write("問1" + "<br>");
for(var a = 0; a < 5; a++){
  document.write("★");
}
document.write("<br>");

document.write("問2" + "<br>");
for(var b = 0; b < 2; b++){
  for(var c = 0; c < 3; c++){
    document.write("★");
  }
  document.write("<br>");
}

document.write("問3" + "<br>");
for(var d = 0; d < 2; d++){
  for(var e = 1; e < 3; d++){
    if(e % 2 == 0){
      document.write("★");
    }
    else{
      document.write("☆");
    }
  }
  document.write("<br>");
}


document.write("<br>");
function area(radius,pi=3.14){
  return "半径は" + (radius * radius * pi) + "㎠です。"
}
document.write(area(5) + "<br>");
document.write(area(8) + "<br>");
document.write(area(10) + "<br>");
document.write(area(9999) + "<br>");