const canvas = document.getElementById('galaxy-background');
const context = canvas.getContext('2d');
let stars = [];
let width = 0;
let height = 0;

function createStars() {
    const total = Math.max(110, Math.floor((width * height) / 8500));
    stars = Array.from({ length: total }, () => ({
        x: Math.random() * width,
        y: Math.random() * height,
        size: Math.random() * 1.6 + .25,
        speed: Math.random() * .22 + .03,
        opacity: Math.random() * .72 + .2,
        phase: Math.random() * Math.PI * 2
    }));
}

function resizeCanvas() {
    const ratio = Math.min(window.devicePixelRatio || 1, 2);
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width * ratio;
    canvas.height = height * ratio;
    canvas.style.width = `${width}px`;
    canvas.style.height = `${height}px`;
    context.setTransform(ratio, 0, 0, ratio, 0, 0);
    createStars();
}

function draw(time) {
    context.clearRect(0, 0, width, height);
    stars.forEach((star) => {
        star.y -= star.speed;
        if (star.y < -2) {
            star.y = height + 2;
            star.x = Math.random() * width;
        }
        const glow = star.opacity * (.72 + Math.sin(time / 850 + star.phase) * .28);
        context.beginPath();
        context.fillStyle = `rgba(255, 255, 255, ${glow})`;
        context.arc(star.x, star.y, star.size, 0, Math.PI * 2);
        context.fill();
    });
    requestAnimationFrame(draw);
}

resizeCanvas();
window.addEventListener('resize', resizeCanvas);
requestAnimationFrame(draw);
