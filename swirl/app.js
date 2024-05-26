const app = new PIXI.Application({
    width: window.innerWidth,
    height: window.innerHeight,
    antialias: true,
    transparent: false,
    resolution: 1,
    backgroundColor: 0x000000,
});
document.body.appendChild(app.view);

const uniforms = {
    u_time: { type: 'f', value: 0.0 },
    u_mouse: { type: 'v2', value: { x: 0.0, y: 0.0 } },
    u_resolution: { type: 'v2', value: { x: app.screen.width, y: app.screen.height } }
};

const fragmentShader = `
precision mediump float;

uniform float u_time;
uniform vec2 u_mouse;
uniform vec2 u_resolution;

float random (in vec2 st) {
    return fract(sin(dot(st.xy,
                         vec2(12.9898,78.233)))*
        43758.5453123);
}

float noise (in vec2 st) {
    vec2 i = floor(st);
    vec2 f = fract(st);

    vec2 u = f*f*(3.0-2.0*f);

    return mix(mix(random(i + vec2(0.0,0.0)),
                   random(i + vec2(1.0,0.0)), u.x),
               mix(random(i + vec2(0.0,1.0)),
                   random(i + vec2(1.0,1.0)), u.x), u.y);
}

void main() {
    vec2 st = gl_FragCoord.xy/u_resolution.xy*10.0;
    vec2 pos = vec2(st*10.0);
    float n = noise(pos + u_time);

    vec3 color = vec3(n);
    gl_FragColor = vec4(color,1.0);
}
`;

const shader = new PIXI.Filter(null, fragmentShader, uniforms);

const container = new PIXI.Container();
container.filterArea = app.screen;
container.filters = [shader];

app.stage.addChild(container);

app.ticker.add(() => {
    uniforms.u_time.value += 0.01;
    uniforms.u_resolution.value.x = app.screen.width;
    uniforms.u_resolution.value.y = app.screen.height;
});

app.stage.interactive = true;
app.stage.on('mousemove', (event) => {
    uniforms.u_mouse.value.x = event.data.global.x / app.screen.width;
    uniforms.u_mouse.value.y = 1 - event.data.global.y / app.screen.height;
});

window.addEventListener('resize', () => {
    app.renderer.resize(window.innerWidth, window.innerHeight);
});
