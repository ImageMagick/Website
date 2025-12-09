<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p class="lead">This document describes the requirements and instructions to build ImageMagick for Windows on your own machine.</p>

<h2>Requirements</h2>
<ul>
<li>Visual Studio 2017 (or newer)</li>
<li>Git for Windows</li>
<li>AMD APP SDK (optional for OpenCL support)</li>
</ul>

<h2>Install Visual Studio dependencies</h2>
<p>To build ImageMagick with Visual Studio the following components should be installed:</p>

<ul>
<li>Desktop development with C++ (workload)</li>
<li>Visual C++ ATL for x86 and x64</li>
<li>Visual C++ MFC for x86 and x64</li>
<li>Windows XP support for C++ (optional if the output needs to run on Windows XP)</li>
</ul>

<p>Naming of these components might differ between version of Visual Studio. The example above use the Visual Studio 2017 names.</p>

<h2>Clone the dependencies</h2>
<p>The ImageMagick library is built with a number of third party libraries. Run <samp>CloneRepositories.IM7.cmd</samp> to clone
these libraries and the ImageMagick library. To clone the legacy ImageMagick 6 library and it's dependencies
run <samp>CloneRepositories.IM6.cmd</samp>.</p>

<h2>Build Configure.exe</h2>
<p>One of the folders in this project is called <samp>Configure</samp>. This folder contains the solution file <samp>Configure.sln</samp>
for the latest 2022 version of Visual Studio, and <samp>Configure.2017.sln</samp> for older versions. Open one of those and
start a <samp>Release</samp> build of the project. This will create a file called <samp>Configure.exe</samp> in the folder. Running this
program will start a Wizard that allows configuration of ImageMagick and its individual components.</p>

<h2>Build ImageMagick</h2>
<p>Depending on which options where chosen when running <samp>configure.exe</samp> one of the following solutions will be created in the root of the repository:</p>

<ul>
<li>IM7.Dynamic.sln (Dynamic Multi-threaded DLL runtimes)</li>
<li>IM7.StaticDLL.sln (Static Multi-threaded DLL runtimes)</li>
<li>IM7.Static.sln (Static Multi-threaded runtimes)</li>
</ul>

<p>Open the solution to start building ImageMagick. The binaries will be created in the <samp>Output\bin</samp> folder.</p>
</div>
