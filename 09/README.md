## Patterns

Since shader programs are executed by pixel-by-pixel it doesn't matter how much you repeat a shape - the number of calculations stays constant. This means that fragment shaders are particulary suitable for tile patterns. 

![Nina Warmerdam - The IMPRINT Project (2013)](warmerdam.jpg)

In this chapter we are going to apply what we've learned so far and repeat it along a canvas. Like in previous chapters, our strategy will be based on multiplying the space coordinates (between 0.0 and 1.0), so the shapes we draw between the values 0.0 and 1.0 will be repeated to make a grid. 

*"The grid provides a framework within which human intuition and invention can operate and that it can subvert. Within the chaos of nature patterns provide a constrast and promise of order. From early patterns on pottery to geometric mosaics in Roman baths, people have long used grids to enhance their lives with decoration."* [*10 PRINT*, Mit Press, (2013)](http://10print.org/)

First let's remember the [```fract()```](http://www.shaderific.com/glsl-functions/#fractionalpart) function, which is in essence the modulo of one (```mod(x,1.0)```) because it returns the fractional part of a number. In other words, ```fract()``` returns the number after the floating point. Our normalized coordinate system variable (```st```) already goes from 0.0 to 1.0 so it doesn't make sense to do something like:

```glsl
void main(){
	vec2 st = gl_FragCoord.xy/u_resolution;
	vec3 color = vec3(0.0);
    st = fract(st);
	color = vec3(st,0.0);
	gl_FragColor = vec4(color,1.0);
}
```

But if we scale the normalized coordinate system up - let's say by three - we will get three sequences of linear interpolations between 0-1: the first one between 0-1, the second one for the floating points between 1-2 and the third one for the floating points between 2-3.

____comment the code below with some comments about where the interpolation by three is happening____

<div class="codeAndCanvas" data="grid-making.frag"></div>

Now it's time to draw something on each subspace in the same way we did in previous chapters, by uncommenting line 25. Because we are multiplying equally in x and y the aspect ratio of the space doesn't change and shapes will be as expected.

Try some of the following exercises to get a deeper understanding:

* Try multiplying the space by different numbers. Try with floating point values and also with different values for x and y.

* Make a reusable function of this tiling trick.

* Divide the space into 3 rows and 3 columns. Find a way to know in which column and row the thread is and use that to change the shape that is displaying. Try to compose a tic-tac-toe match.

### Apply matrixes inside patterns 

Since each subdivision or cell is a smaller version of the normalized coordinate system we have already been using we can apply a matrix transformation to it in order to translate, rotate or scale the space inside. 

____comment the code below with some comments about where the matrix transformations are happening____

<div class="codeAndCanvas" data="checks.frag"></div>

____maybe add some exercises here for the code above?____

### Offset patterns

So let's say we want to imitate a brick wall. Looking at the wall, you can see a half brick offset on x in every other row. How we can do that?

![](brick.jpg)

As a first step we need to know if the row of our thread is an even or odd number, because we can use that to determine if we need to offset the x in that row.

____we have to fix these next two paragraphs together____

For that we are going to use ```fract()``` again but with the coordinates at the double of space. Take a look to the folowing formula and how it looks like.

<div class="simpleFunction" data="y = fract(x*0.5);"></div>

By multiplying *x* by a half the space coordinate duplicate it size (which is the oposite of what we have been doing where we multiply the ```st``` and the space got shrinked). Let's say we are in position 1.0 (not even) we divide by two will be 0.5, while if the position was 2.0 (even) we devide by two the result will be 1.0. For values over 2.0, ```fract()``` will wrap them up and start again and again. This means the return value of this function will give numbers bellow 0.5 for not even numbers and above 0.5 for even. Isn't this super help full?

____fix the previous two paragraphs with Jen____

Now we can apply some offset to odd rows to give a *brick* effect to our tiles. Check line number 10 and 11 of the following code:

____check if lines 10 and 11 are still the right lines____

____comment the code below with notes about where the brick offset is happening____

<div class="codeAndCanvas" data="bricks.frag"></div>

____mention uncommenting line 31 to get actual brick dimensions____

____maybe add exercises?____

## Truchet Tiles

Now that we've learned how to tell if our cell is in an even or odd row or column, it's possible to reuse a single design element depending on its position. Consider the case of the [Truchet Tiles](http://en.wikipedia.org/wiki/Truchet_tiles) where a single design element can be presented in four different ways:

![](truchet-00.png)

By changing the pattern across tiles, it's possible to contruct an infinite set of complex designs. 

![](truchet-01.png)

Pay close attention to the function ```rotateTilePattern()```, which subdivides the space into four cells and assigns an angle of rotation to each one.

____comment the code below to describe what's happening in rotateTilePattern()____

<div class="codeAndCanvas" data="truchet.frag"></div>

* Comment, uncomment and duplicate lines 52 to 55 to compose new designs.

## Making your own rules

Making procedural patterns is a mental exercise in finding minimal reusable elements. This practice is old; we as a species have been using grids and patterns to decorate textiles, floors and borders of objects for a long time ____this would be better if you could name a very old thing____. The pleasure of repetition and variation has caught our imagination. Take some time to look at [decorative](https://archive.org/stream/traditionalmetho00chririch#page/130/mode/2up) [patterns](https://www.pinterest.com/patriciogonzv/paterns/) and see how artists and designers have a long history of challenging the fine edge between the predictability of order and the surprise of variation and chaos. From Arabic geometrical patterns, to gorgeous Japanese designs, there is an entire universe of patterns to learn from. 

![Franz Sales Meyer - A handbook of ornament (1920)](geometricpatters.png)

____what's coming next?____