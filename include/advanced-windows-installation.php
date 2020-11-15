<div class="magick-header">
<h1 class="text-center">Advanced Windows Installation</h1>
<p class="lead magick-description">This document describes the requirements and instructions to build ImageMagick for Windows on your own machine.</p>

<h2>Requirements</h2>
<ul>
<li>Visual Studio 2013 (or newer)</li>
<li>Git for Windows</li>
<li>AMD APP SDK (optional for OpenCL support)</li>
</ul>

<h2>Install Visual Studio dependencies</h2>
<p>To build ImageMagick with Visual Studio the following components should be installed:</p:

<ul>
<li>Desktop development with C++ (workload)</li>
<li>Visual C++ ATL for x86 and x64</li>
<li>Visual C++ MFC for x86 and x64</li>
</ul>

<p>Naming of these components might differ between version of Visual Studio. The example above use the Visual Studio 2017 names.</p>

<h2>Clone the dependencies</h2>
<p>The ImageMagick library is build with a number of third party libraries. Run <code>CloneRepositories.cmd</code> to clone these libraries and the ImageMagick library.</p>

<h2>Build configure.exe</h2>
<p>One of the folders that was created in the previous step is called <code>VisualMagick</code> and this folder contains a folder called <code>configure</code>. This folder contains a solution <code>configure.sln</code>. Open this solution with Visual Studio and start a Release build of the project. This will create a file called <code>configure.exe</code> in the folder. Running this program will start a Wizard that allows configuration of ImageMagick and its individual components.</p>

<h2>Build ImageMagick</h2>
<p>Depending on which options where chosen when running <code>configure.exe</code> one of the following solutions will be created in the <code>VisualMagick</code> folder:</p>

<ul>
<li>VisualDynamicMT.sln (Dynamic Multi-threaded DLL runtimes)</li>
<li>VisualStaticMTD.sln (Static Multi-threaded DLL runtimes)</li>
<li>VisualStaticMT.sln (Static Multi-threaded runtimes)</li>
</ul>

<p>Open the solution to start building ImageMagick. The binaries will be created in the VisualMagick\bin folder.</p>
</div>
