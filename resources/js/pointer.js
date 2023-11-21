const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#3b9ae1",
  "#3b9ae1",
  "#3b9ae1",
  "#54ace7",
  "#69bbec",
  "#79c7f0",
  "#8ed5f4",
  "#a3e4f9",
  "#b4f0fc",
  "#c0f9ff",
  "#bcf8fc",
  "#b9f7f9",
  "#b5f6f6",
  "#b1f5f3",
  "#adf4f0",
  "#a9f3ed",
  "#a5f1e9",
  "#a5f1e9",
  "#a5f1e9",
  "#a5f1e9",
  "#a5f1e9",
  "#a5f1e9"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;

});

function animateCircles() {

  let x = coords.x;
  let y = coords.y;

  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";

    circle.style.scale = (circles.length - index) / circles.length;

    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });

  requestAnimationFrame(animateCircles);
}

animateCircles();
