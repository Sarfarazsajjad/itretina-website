@extends('_layouts.main')
<script>
    let particles = [];
    const particleCount = 200;

    function setup() {
        let canvas = createCanvas(windowWidth, windowHeight);
        canvas.parent('p5-canvas-container');
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }
    }

    function windowResized() {
        resizeCanvas(windowWidth, windowHeight);
    }

    function draw() {
        let gradientColorTop = color(173, 216, 230);
        let gradientColorBottom = color(240, 248, 255);
        setGradient(gradientColorTop, gradientColorBottom);
        for (let particle of particles) {
            particle.update();
            particle.display();
        }
    }

    class Particle {
        constructor() {
            this.pos = createVector(random(width), random(height));
            this.vel = createVector(random(-0.5, 0.5), random(-0.5, 0.5));
            this.acc = createVector();
            this.r = 2;
        }

        update() {
            this.vel.add(this.acc);
            this.pos.add(this.vel);
            this.acc.mult(0.2);
            this.edges();
        }

        display() {
            noStroke();
            fill(255);
            ellipse(this.pos.x, this.pos.y, this.r * 2);

            for (let particle of particles) {
                let d = dist(this.pos.x, this.pos.y, particle.pos.x, particle.pos.y);
                if (d < 100) {
                    stroke(255, 50);
                    line(this.pos.x, this.pos.y, particle.pos.x, particle.pos.y);
                }
            }
        }

        edges() {
            if (this.pos.x < 0 || this.pos.x > width) {
                this.vel.x *= -1;
            }

            if (this.pos.y < 0 || this.pos.y > height) {
                this.vel.y *= -1;
            }
        }

        interact() {
            let d = dist(this.pos.x, this.pos.y, mouseX, mouseY);
            if (d < 150) {
                let force = createVector((this.pos.x - mouseX) * 0.002, (this.pos.y - mouseY) * 0.002);
                this.acc.add(force);
            }
        }
    }

    function setGradient(gradientColorTop, gradientColorBottom) {
        noFill();
        for (let i = 0; i <= height; i++) {
            let inter = map(i, 0, height, 0, 1);
            let c = lerpColor(gradientColorTop, gradientColorBottom, inter);
            stroke(c);
            line(0, i, width, i);
        }
    }

    function mouseMoved() {
        for (let particle of particles) {
            particle.interact();
        }
        return false; // prevent default
    }
</script>
@section('body')
<div id="p5-canvas-container"></div>
<!-- Hero Section -->
<div class="container text-center my-5">
        <h1>Welcome to ITRetina</h1>
        <p>Your Solution for IT Services and Medical Billing</p>
    </div>
    @include('_partials.homepage-cta')
@endsection
