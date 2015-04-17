## Min
Return the lesser of two values

```glsl
float min(float x, float y)  
vec2 min(vec2 x, vec2 y)  
vec3 min(vec3 x, vec3 y)  
vec4 min(vec4 x, vec4 y)
```

```glsl
vec2 min(vec2 x, float y)  
vec3 min(vec3 x, float y)  
vec4 min(vec4 x, float y)
```

### Parameters
```x``` Specify the first value to compare.

```y``` Specify the second value to compare.

### Description
```min()``` returns the minimum of the two parameters. It returns ```y``` if ```y``` is less than ```x```, otherwise it returns ```x```.

<div class="simpleFunction" data="y = min(x,0.5); "></div>

### See Also
[max](index.html#max.md), [abs](index.html#abs.md), [clamp](index.html#clamp.md), [Chapter 05: Shaping Functions](../05/)