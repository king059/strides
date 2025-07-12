$(function () {
    $('.nav-btn').on('click', function () {
        $(this).toggleClass('open');
    });
});

$(window).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $("#header").addClass('glass-effect');
        } else {
            $("#header").removeClass("glass-effect");
        }
    })
})

// Morphing blob already animated by CSS

// Particles setup
const canvas = document.getElementById('particles');
const ctx = canvas.getContext('2d');
let width, height;
let particles = [];

function resizeCanvas() {
  width = canvas.width = window.innerWidth;
  height = canvas.height = window.innerHeight;
}

window.addEventListener('resize', resizeCanvas);
resizeCanvas();

class Particle {
  constructor() {
    this.reset();
  }

  reset() {
    this.x = Math.random() * width;
    this.y = Math.random() * height;
    this.size = Math.random() * 2 + 1;
    this.speedX = Math.random() * 2 - 1;
    this.speedY = Math.random() * 2 - 1;
    this.alpha = Math.random() * 0.5 + 0.2;
    this.color = `hsla(${Math.random() * 360}, 100%, 60%, ${this.alpha})`;
  }

  update() {
    this.x += this.speedX;
    this.y += this.speedY;

    if (this.x < 0 || this.x > width || this.y < 0 || this.y > height) {
      this.reset();
    }
  }

  draw() {
    ctx.beginPath();
    ctx.fillStyle = this.color;
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
  }
}

function initParticles(num) {
  particles = [];
  for (let i = 0; i < num; i++) {
    particles.push(new Particle());
  }
}

function animate() {
  ctx.clearRect(0, 0, width, height);
  particles.forEach(p => {
    p.update();
    p.draw();
  });
  requestAnimationFrame(animate);
}

initParticles(150);
animate();

// Simulate loading complete
setTimeout(() => {
  document.getElementById('loader').style.opacity = 0;
  document.getElementById('loader').style.pointerEvents = 'none';
  document.getElementById('main-content').style.display = 'block';
}, 4000);


