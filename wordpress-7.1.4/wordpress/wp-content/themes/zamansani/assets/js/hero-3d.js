
(() => {
    'use strict';

    // جلوگیری از اجرای مجدد
    if (window.zsHero3DInitialized) return;
    window.zsHero3DInitialized = true;

    // بررسی Three.js
    if (typeof THREE === 'undefined') {
        console.error('ZamanSani Hero: Three.js is not loaded.');
        return;
    }

    // Canvas
    const canvas = document.querySelector('#zs-hero-canvas');

    if (!canvas) {
        console.warn('ZamanSani Hero: Canvas not found.');
        return;
    }

    const hero = document.querySelector('.zs-hero-3d') || canvas.parentElement;

    // Scene
    const scene = new THREE.Scene();

    // Camera
    const camera = new THREE.PerspectiveCamera(
        45,
        1,
        0.1,
        100
    );

    camera.position.set(0, 0, 5.2);

    // Renderer
    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: true
    });

    renderer.setPixelRatio(
        Math.min(window.devicePixelRatio || 1, 2)
    );

    renderer.setClearColor(0x000000, 0);

    // Colors
    const COLORS = {
        green: 0x468432,
        gold: 0xD9D28B,
        white: 0xffffff
    };

    // Main group
    const globeGroup = new THREE.Group();

    scene.add(globeGroup);

    // =========================================
    // Globe
    // =========================================

    const globeGeometry = new THREE.SphereGeometry(
        1.35,
        64,
        64
    );

    // =========================================
    // Realistic Earth Texture
    // =========================================

    // =========================================
// Earth Texture Loader
// =========================================

const textureLoader = new THREE.TextureLoader();

const textureBase = canvas.dataset.textureBase;

if (!textureBase) {
    console.error('ZamanSani: Earth texture path not found.');
    return;
}

// Earth color texture
const earthTexture = textureLoader.load(
    textureBase + 'earth_atmos_2048.jpg',

    (texture) => {
        texture.colorSpace = THREE.SRGBColorSpace;
        console.log('Earth color texture loaded.');
    },

    undefined,

    (error) => {
        console.error('Earth color texture failed:', error);
    }
);

// Earth normal texture
const earthNormal = textureLoader.load(
    textureBase + 'earth_normal_2048.jpg',

    () => {
        console.log('Earth normal texture loaded.');
    },

    undefined,

    (error) => {
        console.error('Earth normal texture failed:', error);
    }
);

    // Earth surface details
   

    // Earth material
    const globeMaterial = new THREE.MeshPhongMaterial({

        map: earthTexture,

        normalMap: earthNormal,

        normalScale: new THREE.Vector2(0.5, -0.5),

        specular: new THREE.Color(0x334455),

        shininess: 18

    });

    const globe = new THREE.Mesh(
        globeGeometry,
        globeMaterial
    );

    globeGroup.add(globe);

    // Outer globe wireframe
    const wireGeometry = new THREE.SphereGeometry(
        1.38,
        32,
        32
    );

    const wireMaterial = new THREE.MeshBasicMaterial({
        color: COLORS.gold,
        wireframe: true,
        transparent: true,
        opacity: 0.10
    });

    const wireGlobe = new THREE.Mesh(
        wireGeometry,
        wireMaterial
    );

    globeGroup.add(wireGlobe);

    // =========================================
    // Lighting
    // =========================================

    const ambientLight = new THREE.AmbientLight(
        0xffffff,
        1.5
    );

    scene.add(ambientLight);

    const mainLight = new THREE.PointLight(
        COLORS.gold,
        2.5,
        15
    );

    mainLight.position.set(3, 3, 5);

    scene.add(mainLight);

    const greenLight = new THREE.PointLight(
        COLORS.green,
        2,
        12
    );

    greenLight.position.set(-3, -2, 3);

    scene.add(greenLight);

    // =========================================
    // Iran and Basra locations
    // =========================================

    const tehranPoint = new THREE.Vector3(
        -0.35,
        0.75,
        1.15
    );

    const basraPoint = new THREE.Vector3(
        -0.55,
        0.40,
        1.18
    );

    // City markers
    function createCityMarker(position, color) {

        const group = new THREE.Group();

        const core = new THREE.Mesh(
            new THREE.SphereGeometry(
                0.055,
                20,
                20
            ),
            new THREE.MeshBasicMaterial({
                color: color
            })
        );

        group.add(core);

        const ring = new THREE.Mesh(
            new THREE.RingGeometry(
                0.08,
                0.13,
                32
            ),
            new THREE.MeshBasicMaterial({
                color: color,
                transparent: true,
                opacity: 0.9,
                side: THREE.DoubleSide
            })
        );

        ring.rotation.x = -0.25;

        group.add(ring);

        group.position.copy(position);

        globeGroup.add(group);

        return {
            group,
            ring
        };
    }

    const tehranMarker = createCityMarker(
        tehranPoint,
        COLORS.gold
    );

    const basraMarker = createCityMarker(
        basraPoint,
        COLORS.white
    );

    // =========================================
    // Connection route
    // =========================================

    const connectionCurve = new THREE.QuadraticBezierCurve3(
        tehranPoint,
        new THREE.Vector3(-0.95, 1.05, 1.45),
        basraPoint
    );

    // Main route
    const routeGeometry = new THREE.TubeGeometry(
        connectionCurve,
        100,
        0.018,
        12,
        false
    );

    const routeMaterial = new THREE.MeshBasicMaterial({
        color: COLORS.gold,
        transparent: true,
        opacity: 0.95
    });

    const connectionRoute = new THREE.Mesh(
        routeGeometry,
        routeMaterial
    );

    globeGroup.add(connectionRoute);

    // Glow route
    const glowGeometry = new THREE.TubeGeometry(
        connectionCurve,
        100,
        0.055,
        12,
        false
    );

    const glowMaterial = new THREE.MeshBasicMaterial({
        color: COLORS.gold,
        transparent: true,
        opacity: 0.14
    });

    const connectionGlow = new THREE.Mesh(
        glowGeometry,
        glowMaterial
    );

    globeGroup.add(connectionGlow);

    // =========================================
    // Moving connection lights
    // =========================================

    function createConnectionLight(color, size) {

        const material = new THREE.MeshBasicMaterial({
            color: color
        });

        const light = new THREE.Mesh(
            new THREE.SphereGeometry(
                size,
                24,
                24
            ),
            material
        );

        globeGroup.add(light);

        return light;
    }

    const connectionLight = createConnectionLight(
        COLORS.white,
        0.075
    );

    const connectionLight2 = createConnectionLight(
        COLORS.gold,
        0.09
    );

    // Light halos
    function createHalo(light, color) {

        const halo = new THREE.Mesh(
            new THREE.SphereGeometry(
                0.15,
                24,
                24
            ),
            new THREE.MeshBasicMaterial({
                color: color,
                transparent: true,
                opacity: 0.18
            })
        );

        globeGroup.add(halo);

        return halo;
    }

    const lightHalo1 = createHalo(
        connectionLight,
        COLORS.white
    );

    const lightHalo2 = createHalo(
        connectionLight2,
        COLORS.gold
    );

    // =========================================
    // Orbit rings
    // =========================================

    function createOrbit(radius, rotationX, rotationY) {

        const geometry = new THREE.TorusGeometry(
            radius,
            0.006,
            8,
            180
        );

        const material = new THREE.MeshBasicMaterial({
            color: COLORS.gold,
            transparent: true,
            opacity: 0.18
        });

        const orbit = new THREE.Mesh(
            geometry,
            material
        );

        orbit.rotation.x = rotationX;
        orbit.rotation.y = rotationY;

        globeGroup.add(orbit);

        return orbit;
    }

    const orbit1 = createOrbit(
        1.65,
        Math.PI / 2.4,
        0.3
    );

    const orbit2 = createOrbit(
        1.85,
        Math.PI / 3,
        -0.6
    );

    // =========================================
    // Particles
    // =========================================

    const particleCount = 350;

    const particlePositions = new Float32Array(
        particleCount * 3
    );

    for (let i = 0; i < particleCount; i++) {

        particlePositions[i * 3] =
            (Math.random() - 0.5) * 7;

        particlePositions[i * 3 + 1] =
            (Math.random() - 0.5) * 5;

        particlePositions[i * 3 + 2] =
            (Math.random() - 0.5) * 4;
    }

    const particlesGeometry = new THREE.BufferGeometry();

    particlesGeometry.setAttribute(
        'position',
        new THREE.BufferAttribute(
            particlePositions,
            3
        )
    );

    const particlesMaterial = new THREE.PointsMaterial({
        color: COLORS.gold,
        size: 0.025,
        transparent: true,
        opacity: 0.55,
        sizeAttenuation: true
    });

    const particles = new THREE.Points(
        particlesGeometry,
        particlesMaterial
    );

    scene.add(particles);

    // =========================================
    // Mouse interaction
    // =========================================

    let mouseX = 0;
    let mouseY = 0;

    let targetRotationX = 0;
    let targetRotationY = 0;

    if (hero) {

        hero.addEventListener(
            'mousemove',
            (event) => {

                const rect = hero.getBoundingClientRect();

                mouseX =
                    ((event.clientX - rect.left) / rect.width) * 2 - 1;

                mouseY =
                    ((event.clientY - rect.top) / rect.height) * 2 - 1;

                targetRotationY = mouseX * 0.12;
                targetRotationX = mouseY * 0.08;
            }
        );

        hero.addEventListener(
            'mouseleave',
            () => {
                targetRotationX = 0;
                targetRotationY = 0;
            }
        );
    }

    // =========================================
    // Responsive
    // =========================================

    function resize() {

        const width = hero.clientWidth || window.innerWidth;
        const height = hero.clientHeight || window.innerHeight;

        if (!width || !height) return;

        camera.aspect = width / height;

        camera.position.z =
            width < 768 ? 8.2 : 7;

        camera.updateProjectionMatrix();

        renderer.setSize(
            width,
            height,
            false
        );
    }

    resize();

    window.addEventListener(
        'resize',
        resize
    );

    // =========================================
    // Animation
    // =========================================

    const clock = new THREE.Clock();

    function animate() {

        requestAnimationFrame(animate);

        const elapsed = clock.getElapsedTime();

        // Globe rotation
        globeGroup.rotation.y += 0.0008;

        // Mouse movement
        globeGroup.rotation.x +=
            (targetRotationX - globeGroup.rotation.x) * 0.025;

        globeGroup.rotation.y +=
            (targetRotationY - globeGroup.rotation.y) * 0.025;

        // Orbit animation
        orbit1.rotation.z = elapsed * 0.08;

        orbit2.rotation.z = -elapsed * 0.05;

        // Route lights
        const progress = (elapsed * 0.12) % 1;

        const point1 = connectionCurve.getPoint(
            progress
        );

        const point2 = connectionCurve.getPoint(
            (progress + 0.5) % 1
        );

        connectionLight.position.copy(point1);

        connectionLight2.position.copy(point2);

        // Light halos follow moving lights
        lightHalo1.position.copy(point1);

        lightHalo2.position.copy(point2);

        // Pulsing
        const pulse =
            1 + Math.sin(elapsed * 3) * 0.15;

        lightHalo1.scale.setScalar(pulse);

        lightHalo2.scale.setScalar(pulse);

        // City rings
        tehranMarker.ring.rotation.z =
            elapsed * 0.8;

        basraMarker.ring.rotation.z =
            -elapsed * 0.8;

        // Particle movement
        particles.rotation.y = elapsed * 0.015;

        // Render
        renderer.render(
            scene,
            camera
        );
    }

    animate();

})();
