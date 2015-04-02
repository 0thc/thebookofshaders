// Author @patriciogv - 2015
// http://patriciogonzalezvivo.com

#ifdef GL_ES
precision mediump float;
#endif

uniform vec2 u_resolution;
uniform vec2 u_mouse;
uniform float u_time;

void main(){
	vec2 st = gl_FragCoord.xy/u_resolution;
    float pct = 0.0;

    // a. The DISTANCE to the center whick is the 
    pct = distance(st,vec2(0.5));

    // b. The LENGTH to the vector to the center 
    // vec2 tC = vec2(0.5)-st;
    // pct = length(tC);

    // c. The SQUARE ROOT of the vector
    // pct = sqrt(tC.x*tC.x+tC.y*tC.y);

    vec3 color = vec3(pct);

	gl_FragColor = vec4( color, 1.0 );
}