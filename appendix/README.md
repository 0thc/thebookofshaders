# Appendix: Other ways to use this book

This book is interactive. Is designed to be navigated with a modern web browser that supports WebGL technology (Firefox, Chrome, Safari, between others). But you may encounter the situation that you don't have a computer with no GPU card or not internet. If that's the case the following sections can help you.  

## Navigate this book off-line?

Let’s say you have a long trip and you want to use it to teach yourself some shaders. In that case you can make a local copy of this book on your computer and run a local server.

For that you only need Python 2.6 and a git client. On MacOS and Linux computers Python is installed by default but you still need to install a git client. For that:

In **MacOSX** be sure to have [homebrew](http://brew.sh/) installed and then on your terminal do:

```bash
brew update
brew upgrade
brew install git 
```

On **Linux** you need to do:

```bash
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install git-core
```

Once you have everything installed you just need to do:

```bash
cd ~
git clone https://github.com/patriciogonzalezvivo/thebookofshaders.git
cd thebookofshaders
python -m SimpleHTTPServer
```

Then open your browser to [```http://localhost:8000/```](http://localhost:8000/)

## How to run the examples on a RaspberryPi?

A few years ago, taking for granted that everybody have a computer with a GPU was a long shot. Now, most computers have a graphic unit, but is a high bar for a requirement in for example a course or class. 

Thanks to the [RaspberryPi project](http://www.raspberrypi.org/) a new type of small and cheap generation of computers (arround $35 each) has found its way into  classrooms. More importantly for the purposes of this book, the [RaspberryPi](http://www.raspberrypi.org/) comes with a decent Bradcom GPU card that can be accessed directly from the console. I made a [flexible GLSL live coding tool call **glslViewer**](https://github.com/patriciogonzalezvivo/glslViewer) that runs all the examples on this book. This program also is hable to update automatically the changes the user makes when they save it. What that means? you can edit the shader and every time you save it, the shader will be re-compile and rendered for you.

By making a local copy of the repository of this book (see the above section) and having [```glslViewer``` installed](https://github.com/patriciogonzalezvivo/glslViewer), users can run the examples with ```glslviewer```. Also by using the ```-l``` flag they can render the example on a corner of the screen while they modify it with any text editor (like ```nano```, ```pico```, ```vi```, ```vim``` or ```emacs```). This also works if the user is connected through ssh/sftp.

To install and set this all up on the RaspberryPi after installing the OS and logging in, type the following commands:

```bash
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install git-core 
sudo apt-get install libfreeimage-dev
cd ~ 
git clone http://github.com/patriciogonzalezvivo/glslViewer.git
cd glslViewer
make
make install
cd ~
git clone https://github.com/patriciogonzalezvivo/thebookofshaders.git
cd thebookofshaders
```
