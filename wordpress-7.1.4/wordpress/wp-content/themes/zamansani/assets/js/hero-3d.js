import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.180.0/build/three.module.js';

const container = document.getElementById('zs-hero-canvas');

if (container) {

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        0.1,
        100
    );

    camera.position.set(0, 0, 7);

    const renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });

    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(container.clientWidth, container.clientHeight);

    renderer.setClearColor(0x000000, 0);

    container.appendChild(renderer.domElement);

    // Lights
    scene.add(new THREE.AmbientLight(0xffffff, 1.5));

    const light = new THREE.DirectionalLight(0xffffff, 3);
    light.position.set(4, 5, 6);
    scene.add(light);

    // // Globe
    // const globeGroup = new THREE.Group();
    // scene.add(globeGroup);

    // const globeGeometry = new THREE.SphereGeometry(1.7, 64, 64);

    // const globeMaterial = new THREE.MeshStandardMaterial({
    //     color: 0x468432,
    //     roughness: 0.35,
    //     metalness: 0.15
    // });

    // const globe = new THREE.Mesh(globeGeometry, globeMaterial);
    // globeGroup.add(globe);

    // // Latitude / longitude lines
    // const wireGeometry = new THREE.SphereGeometry(1.72, 32, 24);

    // const wireMaterial = new THREE.MeshBasicMaterial({
    //     color: 0xc5e6b8,
    //     wireframe: true,
    //     transparent: true,
    //     opacity: 0.18
    // });

    // globeGroup.add(
    //     new THREE.Mesh(wireGeometry, wireMaterial)
    // );

    // // Connection arc
    // const points = [];

    // for (let i = 0; i <= 100; i++) {
    //     const t = i / 100;

    //     points.push(
    //         new THREE.Vector3(
    //             -1.2 + t * 2.4,
    //             Math.sin(t * Math.PI) * 0.9,
    //             1.1
    //         )
    //     );
    // }

    // const arcGeometry = new THREE.BufferGeometry()
    //     .setFromPoints(points);

    // const arcMaterial = new THREE.LineBasicMaterial({
    //     color: 0xd9d28b
    // });

    // const arc = new THREE.Line(arcGeometry, arcMaterial);
    // globeGroup.add(arc);

    // // City points
    // const cityGeometry = new THREE.SphereGeometry(0.07, 16, 16);

    // const cityMaterial = new THREE.MeshBasicMaterial({
    //     color: 0xffffff
    // });

    // const tehran = new THREE.Mesh(cityGeometry, cityMaterial);
    // tehran.position.set(-0.7, 0.6, 1.5);
    // globeGroup.add(tehran);

    // const basra = new THREE.Mesh(cityGeometry, cityMaterial);
    // basra.position.set(0.7, -0.3, 1.5);
    // globeGroup.add(basra);

    // // Particles
    // const particleCount = 350;
    // const particlePositions = new Float32Array(particleCount * 3);

    // for (let i = 0; i < particleCount; i++) {
    //     particlePositions[i * 3] = (Math.random() - 0.5) * 10;
    //     particlePositions[i * 3 + 1] = (Math.random() - 0.5) * 6;
    //     particlePositions[i * 3 + 2] = (Math.random() - 0.5) * 4;
    // }

    // const particleGeometry = new THREE.BufferGeometry();

    // particleGeometry.setAttribute(
    //     'position',
    //     new THREE.BufferAttribute(particlePositions, 3)
    // );

    // const particleMaterial = new THREE.PointsMaterial({
    //     color: 0x468432,
    //     size: 0.025,
    //     transparent: true,
    //     opacity: 0.55
    // });

    // const particles = new THREE.Points(
    //     particleGeometry,
    //     particleMaterial
    // );

    // scene.add(particles);
    
    // Globe group
    const globeGroup = new THREE.Group();
    scene.add(globeGroup);

    // Earth texture
    const textureLoader = new THREE.TextureLoader();

    const earthTexture = textureLoader.load(
        'https://threejs.org/examples/textures/planets/earth_atmos_2048.jpg'
    );

    const earthGeometry = new THREE.SphereGeometry(1.7, 96, 96);

    const earthMaterial = new THREE.MeshStandardMaterial({
        map: earthTexture,
        roughness: 0.8,
        metalness: 0.05
    });

    const earth = new THREE.Mesh(earthGeometry, earthMaterial);
    globeGroup.add(earth);

    // Green outer atmosphere
    const atmosphereGeometry = new THREE.SphereGeometry(1.76, 64, 64);

    const atmosphereMaterial = new THREE.MeshBasicMaterial({
        color: 0x468432,
        transparent: true,
        opacity: 0.08,
        side: THREE.BackSide
    });

    globeGroup.add(
        new THREE.Mesh(atmosphereGeometry, atmosphereMaterial)
    );

    // Geographic coordinates
    function latLonToVector(lat, lon, radius = 1.72) {
        const phi = THREE.MathUtils.degToRad(90 - lat);
        const theta = THREE.MathUtils.degToRad(lon - 50);

        return new THREE.Vector3(
            -radius * Math.sin(phi) * Math.sin(theta),
            radius * Math.cos(phi),
            radius * Math.sin(phi) * Math.cos(theta)
        );
    }

    // Tehran and Basra
    const tehranPosition = latLonToVector(35.69, 51.39);
    const basraPosition = latLonToVector(30.50, 47.81);

    function addCity(position, color) {
        const geometry = new THREE.SphereGeometry(0.045, 24, 24);

        const material = new THREE.MeshBasicMaterial({
            color: color
        });

        const point = new THREE.Mesh(geometry, material);
        point.position.copy(position);
        globeGroup.add(point);

        // Glow ring
        const ring = new THREE.Mesh(
            new THREE.RingGeometry(0.07, 0.10, 32),
            new THREE.MeshBasicMaterial({
                color: color,
                transparent: true,
                opacity: 0.8,
                side: THREE.DoubleSide
            })
        );

        ring.position.copy(position);
        ring.lookAt(position.clone().multiplyScalar(2));
        globeGroup.add(ring);

        return point;
    }

    addCity(tehranPosition, 0xd9d28b);
    addCity(basraPosition, 0x7cff78);

    // Connection arc
    const arcPoints = [];

    const start = tehranPosition.clone().normalize();
    const end = basraPosition.clone().normalize();

    for (let i = 0; i <= 100; i++) {
        const t = i / 100;

        const direction = start.clone().lerp(end, t).normalize();

        const height = Math.sin(t * Math.PI) * 0.22;

        arcPoints.push(
            direction.multiplyScalar(1.72 + height)
        );
    }

    const arcGeometry = new THREE.BufferGeometry()
        .setFromPoints(arcPoints);

    const arcMaterial = new THREE.LineBasicMaterial({
        color: 0xd9d28b,
        transparent: true,
        opacity: 0.95
    });

    const connectionArc = new THREE.Line(
        arcGeometry,
        arcMaterial
    );

    globeGroup.add(connectionArc);

    // Orbit rings
    const orbit1 = new THREE.Mesh(
        new THREE.TorusGeometry(2.05, 0.008, 8, 120),
        new THREE.MeshBasicMaterial({
            color: 0x468432,
            transparent: true,
            opacity: 0.5
        })
    );

    orbit1.rotation.x = 1.1;
    orbit1.rotation.y = 0.4;

    scene.add(orbit1);

    const orbit2 = orbit1.clone();
    orbit2.rotation.x = 2.0;
    orbit2.rotation.y = 1.2;

    scene.add(orbit2);





    // Mouse movement
    let mouseX = 0;
    let mouseY = 0;

    container.addEventListener('mousemove', (event) => {
        const rect = container.getBoundingClientRect();

        mouseX = ((event.clientX - rect.left) / rect.width - 0.5) * 0.5;
        mouseY = ((event.clientY - rect.top) / rect.height - 0.5) * 0.3;
    });

    // Animation
    const clock = new THREE.Clock();

    // function animate() {
    //     requestAnimationFrame(animate);

    //     const elapsed = clock.getElapsedTime();

    //     globeGroup.rotation.y += 0.002;
    //     globeGroup.rotation.y += (mouseX - globeGroup.rotation.y) * 0.002;
    //     globeGroup.rotation.x += (mouseY - globeGroup.rotation.x) * 0.002;

    //     particles.rotation.y = elapsed * 0.02;

    //     renderer.render(scene, camera);
    // }

function animate() {
    requestAnimationFrame(animate);

    const elapsed = clock.getElapsedTime();

    globeGroup.rotation.y += 0.0015;

    globeGroup.rotation.y +=
        (mouseX - globeGroup.rotation.y) * 0.002;

    globeGroup.rotation.x +=
        (mouseY - globeGroup.rotation.x) * 0.002;

    orbit1.rotation.z = elapsed * 0.08;
    orbit2.rotation.z = -elapsed * 0.05;

    // particles.rotation.y = elapsed * 0.02;

    renderer.render(scene, camera);

const progress = (elapsed * 0.18) % 1;

connectionLight.position.copy(
    connectionCurve.getPoint(progress)
);

}


    animate();

    // Responsive
    window.addEventListener('resize', () => {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();

        renderer.setSize(
            container.clientWidth,
            container.clientHeight
        );
    });
}



const connectionCurve = new THREE.QuadraticBezierCurve3(
    tehranPoint,
    new THREE.Vector3(0, 2.2, 0),
    basraPoint
);

// مسیر اصلی ارتباط
const connectionGeometry = new THREE.TubeGeometry(
    connectionCurve,
    100,
    0.018,
    8,
    false
);

const connectionMaterial = new THREE.MeshBasicMaterial({
    color: 0xffd700
});

const connectionLine = new THREE.Mesh(
    connectionGeometry,
    connectionMaterial
);

scene.add(connectionLine);

// نقطه نور متحرک روی مسیر
const connectionLight = new THREE.Mesh(
    new THREE.SphereGeometry(0.055, 16, 16),
    new THREE.MeshBasicMaterial({
        color: 0xffffff
    })
);

scene.add(connectionLight);
