<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <script defer src="{{ mix('js/main.js', '/assets/build') }}"></script>
        <script defer src="{{ $page->baseUrl }}/assets/build/js/main.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('styles/styles.css', '/assets/build') }}">
        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
        <!-- Include Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet" />
    </head>
    <header>
        @include('_partials.header')
    </header>
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
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
    
</html>
