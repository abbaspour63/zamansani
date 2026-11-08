(() => {
    'use strict';

    const container = document.getElementById('zs-hero-new-canvas');

    if (!container || !window.THREE || container.dataset.initialized) {
        return;
    }

    container.dataset.initialized = 'true';

    const THREE = window.THREE;

    // Scene
    const scene = new THREE.Scene();
    window.zsHeroScene = scene;

    const camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        0.1,
        100
    );

    camera.position.set(0, 0, 4.8);
    window.zsHeroCamera = camera;


    const renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });

    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(container.clientWidth, container.clientHeight);

    container.appendChild(renderer.domElement);
    window.zsHeroRenderer = renderer;


    // Globe
    const globe = new THREE.Group();
    scene.add(globe);

    const radius = 1.35;

    const geometry = new THREE.SphereGeometry(radius, 96, 96);

    const textureLoader = new THREE.TextureLoader();

    const earthTexture = textureLoader.load(
        `${window.zsHeroImages || '/wp-content/themes/zamansani/assets/images/'}earth_atmos_2048.jpg`
    );

    // const earth = new THREE.Mesh(
    //     geometry,
    //     new THREE.MeshPhongMaterial({
    //         map: earthTexture,
    //         shininess: 
    //     })
    // );
    earthTexture.colorSpace = THREE.SRGBColorSpace;

    // Create Earth
    const earth = new THREE.Mesh(
        geometry,
        new THREE.MeshBasicMaterial({
            map: earthTexture,
            color: 0xffffff
        })
    );

    globe.add(earth);

    // Lighting
    scene.add(new THREE.AmbientLight(0xffffff, 1.2));

    const light = new THREE.PointLight(0x55cc66, 2.5);
    light.position.set(3, 2, 4);
    scene.add(light);

    // Coordinate conversion
    function getPosition(lat, lon, r = radius) {
        const phi = (90 - lat) * Math.PI / 180;
        const theta = (lon + 180) * Math.PI / 180;

        return new THREE.Vector3(
            -r * Math.sin(phi) * Math.cos(theta),
            r * Math.cos(phi),
            r * Math.sin(phi) * Math.sin(theta)
        );
    }

    // Tehran and Basra
    const tehran = getPosition(35.6892, 51.3890, radius + 0.015);
    const basra = getPosition(30.5085, 47.7804, radius + 0.015);

    function createMarker(position) {
        const marker = new THREE.Group();

        const ring = new THREE.Mesh(
            new THREE.RingGeometry(0.035, 0.065, 32),
            new THREE.MeshBasicMaterial({
                color: 0x55ff55,
                side: THREE.DoubleSide
            })
        );

        ring.position.copy(position);
        ring.lookAt(position.clone().multiplyScalar(2));

        marker.add(ring);

        const dot = new THREE.Mesh(
            new THREE.SphereGeometry(0.035, 16, 16),
            new THREE.MeshBasicMaterial({ color: 0xffffff })
        );

        dot.position.copy(position);
        marker.add(dot);

        globe.add(marker);

        return marker;
    }

    createMarker(tehran);
    createMarker(basra);

    // Connection curve
    const start = tehran.clone().multiplyScalar(1.03);
    const end = basra.clone().multiplyScalar(1.03);

    const middle = start.clone().add(end).multiplyScalar(0.5);
    middle.normalize().multiplyScalar(radius + 0.45);

    const curve = new THREE.QuadraticBezierCurve3(
        start,
        middle,
        end
    );

    const points = curve.getPoints(100);

    const lineGeometry = new THREE.BufferGeometry().setFromPoints(points);

    const lineMaterial = new THREE.LineBasicMaterial({
        color: 0x55ff33,
        transparent: true,
        opacity: 0.9
    });

    const connection = new THREE.Line(lineGeometry, lineMaterial);

    globe.add(connection);

    // Moving light
    const movingLight = new THREE.Mesh(
        new THREE.SphereGeometry(0.045, 16, 16),
        new THREE.MeshBasicMaterial({ color: 0xffffff })
    );

    globe.add(movingLight);

    // Animation
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);

        const elapsed = clock.getElapsedTime();

        globe.rotation.y = elapsed * 0.08;
        // Keep Iran and Iraq facing the camera
        // globe.rotation.x = 0.58;
        // globe.rotation.y = -0.87 + Math.sin(elapsed * 0.08) * 0.12;
        // globe.rotation.z = 0;

        const progress = (elapsed * 0.2) % 1;

        movingLight.position.copy(curve.getPoint(progress));

        renderer.render(scene, camera);
    }

    animate();

    // Responsive
    function resize() {
        const width = container.clientWidth;
        const height = container.clientHeight;

        if (!width || !height) return;

        camera.aspect = width / height;
        camera.updateProjectionMatrix();

        renderer.setSize(width, height);
    }

    window.addEventListener('resize', resize);

})();