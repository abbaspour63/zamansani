


(() => {
    'use strict';

    // ==========================================
    // ZamanSani Hero 3D
    // ==========================================

    const container = document.getElementById('zs-hero-new-canvas');
    console.log('Canvas:', container);
    console.log('Three.js:', window.THREE);
    console.log('Canvas size:', container?.clientWidth, container?.clientHeight);


    if (!container || !window.THREE || container.dataset.initialized) {
        return;
    }
    const container = document.getElementById('zs-hero-new-canvas');

    if (!container || !window.THREE || container.dataset.initialized) {
        return;
    }

    container.dataset.initialized = 'true';

// Remove any previous canvas
    container.innerHTML = '';

    container.dataset.initialized = 'true';

    const THREE = window.THREE;

    // ------------------------------------------
    // Scene
    // ------------------------------------------

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        0.1,
        100
    );

    camera.position.set(0, 0, 5);

    const renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });

    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.domElement.style.position = 'absolute';
    renderer.domElement.style.inset = '0';
    renderer.domElement.style.width = '100%';
    renderer.domElement.style.height = '100%';

    console.log('Renderer created:', renderer.domElement);

    renderer.outputColorSpace = THREE.SRGBColorSpace;

    container.appendChild(renderer.domElement);

    // ------------------------------------------
    // Lighting
    // ------------------------------------------

    scene.add(new THREE.AmbientLight(0xffffff, 1.4));

    const mainLight = new THREE.DirectionalLight(0xffffff, 2.5);
    mainLight.position.set(3, 2, 5);
    scene.add(mainLight);

    const greenLight = new THREE.PointLight(0x468432, 3, 10);
    greenLight.position.set(-2, 1, 3);
    scene.add(greenLight);

    // ------------------------------------------
    // Globe
    // ------------------------------------------

    const globe = new THREE.Group();
    scene.add(globe);

    const radius = 1.45;

    const earthGeometry = new THREE.SphereGeometry(
        radius,
        96,
        96
    );

    const textureLoader = new THREE.TextureLoader();

    const texturePath =
        window.zsHeroImages +
        'earth_atmos_2048.jpg';

    const earthTexture = textureLoader.load(
        texturePath,
        function () {
            console.log('ZamanSani: Earth texture loaded');
        },
        undefined,
        function (error) {
            console.error('ZamanSani: Earth texture error', error);
        }
    );

    earthTexture.colorSpace = THREE.SRGBColorSpace;

    const earthMaterial = new THREE.MeshPhongMaterial({
        map: earthTexture,
        shininess: 15,
        specular: new THREE.Color(0x333333)
    });

    const earth = new THREE.Mesh(
        earthGeometry,
        earthMaterial
    );

    globe.add(earth);

    // ------------------------------------------
    // Atmosphere
    // ------------------------------------------

    const atmosphereGeometry = new THREE.SphereGeometry(
        radius * 1.04,
        64,
        64
    );

    const atmosphereMaterial = new THREE.MeshBasicMaterial({
        color: 0x2ba8d8,
        transparent: true,
        opacity: 0.12,
        side: THREE.BackSide
    });

    const atmosphere = new THREE.Mesh(
        atmosphereGeometry,
        atmosphereMaterial
    );

    globe.add(atmosphere);

    // ------------------------------------------
    // Coordinate conversion
    // ------------------------------------------

    function getPosition(lat, lon, r) {

        const latitude = THREE.MathUtils.degToRad(lat);
        const longitude = THREE.MathUtils.degToRad(lon);

        return new THREE.Vector3(
            r * Math.cos(latitude) * Math.sin(longitude),
            r * Math.sin(latitude),
            r * Math.cos(latitude) * Math.cos(longitude)
        );
    }

    // ------------------------------------------
    // Tehran & Basra
    // ------------------------------------------

    const tehranPosition = getPosition(
        35.6892,
        51.3890,
        radius + 0.015
    );

    const basraPosition = getPosition(
        30.5085,
        47.7804,
        radius + 0.015
    );

    function createMarker(position) {

        const marker = new THREE.Group();

        // Green dot
        const dot = new THREE.Mesh(
            new THREE.SphereGeometry(0.035, 20, 20),
            new THREE.MeshBasicMaterial({
                color: 0x8cff65
            })
        );

        dot.position.copy(position);
        marker.add(dot);

        // Ring
        const ring = new THREE.Mesh(
            new THREE.RingGeometry(0.045, 0.075, 32),
            new THREE.MeshBasicMaterial({
                color: 0x55ff44,
                side: THREE.DoubleSide
            })
        );

        ring.position.copy(position);

        ring.quaternion.setFromUnitVectors(
            new THREE.Vector3(0, 0, 1),
            position.clone().normalize()
        );

        marker.add(ring);

        // Halo
        const halo = new THREE.Mesh(
            new THREE.SphereGeometry(0.09, 16, 16),
            new THREE.MeshBasicMaterial({
                color: 0x468432,
                transparent: true,
                opacity: 0.25
            })
        );

        halo.position.copy(position);
        marker.add(halo);

        globe.add(marker);

        return {
            marker,
            ring,
            halo,
            dot
        };
    }

    const tehranMarker = createMarker(tehranPosition);
    const basraMarker = createMarker(basraPosition);

    // ------------------------------------------
    // Connection arc
    // ------------------------------------------

    const start = tehranPosition.clone()
        .normalize()
        .multiplyScalar(radius + 0.04);

    const end = basraPosition.clone()
        .normalize()
        .multiplyScalar(radius + 0.04);

    const middle = start.clone()
        .add(end)
        .multiplyScalar(0.5);

    middle.normalize().multiplyScalar(radius + 0.55);

    const connectionCurve = new THREE.QuadraticBezierCurve3(
        start,
        middle,
        end
    );

    const curvePoints = connectionCurve.getPoints(120);

    const connectionGeometry = new THREE.BufferGeometry()
        .setFromPoints(curvePoints);

    const connectionMaterial = new THREE.LineBasicMaterial({
        color: 0x55ff33,
        transparent: true,
        opacity: 0.9
    });

    const connectionLine = new THREE.Line(
        connectionGeometry,
        connectionMaterial
    );

    globe.add(connectionLine);

    // ------------------------------------------
    // Moving connection light
    // ------------------------------------------

    const connectionLight = new THREE.Mesh(
        new THREE.SphereGeometry(0.045, 20, 20),
        new THREE.MeshBasicMaterial({
            color: 0xffffff
        })
    );

    globe.add(connectionLight);

    // Light glow
    const lightGlow = new THREE.Mesh(
        new THREE.SphereGeometry(0.09, 16, 16),
        new THREE.MeshBasicMaterial({
            color: 0x55ff33,
            transparent: true,
            opacity: 0.35
        })
    );

    globe.add(lightGlow);

    // ------------------------------------------
    // Animation
    // ------------------------------------------

    const clock = new THREE.Clock();

    function animate() {

        requestAnimationFrame(animate);

        const elapsed = clock.getElapsedTime();

        // Globe rotation
        globe.rotation.y = elapsed * 0.08;

        // Moving light
        const progress = (elapsed * 0.22) % 1;

        const lightPosition = connectionCurve.getPoint(progress);

        connectionLight.position.copy(lightPosition);
        lightGlow.position.copy(lightPosition);

        // Pulsing city markers
        const pulse = 1 + Math.sin(elapsed * 3) * 0.18;

        tehranMarker.halo.scale.setScalar(pulse);
        basraMarker.halo.scale.setScalar(pulse);

        tehranMarker.ring.rotation.z = elapsed * 0.8;
        basraMarker.ring.rotation.z = -elapsed * 0.8;

        renderer.render(scene, camera);
    }

    animate();

    // ------------------------------------------
    // Responsive
    // ------------------------------------------

    function resize() {

        const width = container.clientWidth;
        const height = container.clientHeight;

        if (!width || !height) {
            return;
        }

        camera.aspect = width / height;
        camera.updateProjectionMatrix();

        renderer.setSize(width, height);
    }

    window.addEventListener('resize', resize);

    // ------------------------------------------
    // Debug
    // ------------------------------------------

    console.log('ZamanSani Hero 3D initialized');

})();
