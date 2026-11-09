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
    // const earth = new THREE.Mesh(
    //     geometry,
    //     new THREE.MeshBasicMaterial({
    //         map: earthTexture,
    //         color: 0xffffff
    //     })
    // );

    // globe.add(earth);
    // Create Earth

    const earth = new THREE.Mesh(
        geometry,
        new THREE.MeshPhongMaterial({
            map: earthTexture,
            shininess: 18,
            specular: new THREE.Color(0x222222)
        })
    );

    globe.add(earth);

    // Atmosphere
    const atmosphere = new THREE.Mesh(
        new THREE.SphereGeometry(radius * 1.035, 64, 64),
        new THREE.MeshBasicMaterial({
            color: 0x468432,
            transparent: true,
            opacity: 0.12,
            side: THREE.BackSide
        })
    );

    globe.add(atmosphere);

    // Smaller Globe
    globe.scale.setScalar(0.72);
    // Globe position
    // globe.position.set(1.0,1.0,1.0);
            // Lighting
    // scene.add(new THREE.AmbientLight(0xffffff, 1.2));

    // const light = new THREE.PointLight(0x55cc66, 2.5);
    // light.position.set(3, 2, 4);
    // scene.add(light);

    // // Coordinate conversion
    // function getPosition(lat, lon, r = radius) {
    //     const phi = (90 - lat) * Math.PI / 180;
    //     const theta = (lon + 180) * Math.PI / 180;

    //     return new THREE.Vector3(
    //         -r * Math.sin(phi) * Math.cos(theta),
    //         r * Math.cos(phi),
    //         r * Math.sin(phi) * Math.sin(theta)
    //     );
    // }
    // Lighting

    scene.add(
        new THREE.AmbientLight(0xffffff, 0.55)
    );

    const light = new THREE.DirectionalLight(
        0xffffff,
        2.2
    );

    light.position.set(4, 3, 5);
    scene.add(light);

    const greenLight = new THREE.PointLight(
        0x468432,
        2,
        8
    );

    greenLight.position.set(-3, 1, 2);
    scene.add(greenLight);
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
    // const movingLight = new THREE.Mesh(
    //     new THREE.SphereGeometry(0.045, 16, 16),
    //     new THREE.MeshBasicMaterial({ color: 0xffffff })
    // );

    // globe.add(movingLight);
    // Moving Arrow
    // const arrow = new THREE.Mesh(
    //     new THREE.ConeGeometry(0.075, 0.22, 16),
    //     new THREE.MeshBasicMaterial({
    //         color: 0x55ff33
    //     })
    // );

    // globe.add(arrow);

    // Moving Arrow 3D
    const arrow = new THREE.Group();

    // Arrow shaft
    const shaft = new THREE.Mesh(
        new THREE.CylinderGeometry(0.018, 0.018, 0.18, 12),
        new THREE.MeshStandardMaterial({
            color: 0x55ff33,
            emissive: 0x225511,
            metalness: 0.6,
            roughness: 0.25
        })
    );

    // Arrow head
    const head = new THREE.Mesh(
        new THREE.ConeGeometry(0.055, 0.12, 16),
        new THREE.MeshStandardMaterial({
            color: 0x99ff55,
            emissive: 0x336611,
            metalness: 0.5,
            roughness: 0.2
        })
    );

    // Position parts
    shaft.position.y = 0.03;
    head.position.y = 0.15;

    // Add to arrow
    arrow.add(shaft);
    arrow.add(head);

    // Add arrow to globe
    globe.add(arrow);

    // Animation
    // const clock = new THREE.Clock();

    // function animate() {
    //     requestAnimationFrame(animate);

    //     const elapsed = clock.getElapsedTime();

    //     globe.rotation.y = elapsed * 0.08;
    //     // Keep Iran and Iraq facing the camera
    //     // globe.rotation.x = 0.58;
    //     // globe.rotation.y = -0.87 + Math.sin(elapsed * 0.08) * 0.12;
    //     // globe.rotation.z = 0;

    //     const progress = (elapsed * 0.2) % 1;

    //     movingLight.position.copy(curve.getPoint(progress));

    //     renderer.render(scene, camera);
    // }

    // Animation
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);

        const elapsed = clock.getElapsedTime();

        globe.rotation.y = elapsed * 0.08;

        const progress = (elapsed * 0.2) % 1;

        const arrowPosition = curve.getPoint(progress);

        const tangent = curve.getTangent(progress).normalize();

        arrow.position.copy(arrowPosition);

        // Arrow direction
        arrow.quaternion.setFromUnitVectors(
            new THREE.Vector3(0, 1, 0),
            tangent
        );

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