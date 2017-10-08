<div class="magick-header">
<p class="lead magick-description">A distributed pixel cache is an extension of the traditional pixel cache available on a single host.  The distributed pixel cache may span multiple servers so that it can grow in size and transactional capacity to support very large images or large image sequences.  Start up the pixel cache server on one or more hosts.  When you read or operate on an image and the local pixel cache resources are exhausted, ImageMagick contacts one or more of these remote pixel servers to store or retrieve pixels.</p>
<p>For really large images or large image sequences, or if there is limited resources on your host, you can utilize a distributed pixel cache on one or more remote hosts.  Here we create two distributed pixel caches and utilize them from our desktop:</p>
<pre class="highlight"><code>convert -distribute-cache 6668 &amp;  # start on 192.168.100.50
convert -distribute-cache 6668 &amp;  # start on 192.168.100.51
convert -limit memory 1GiB -limit map 2GiB -limit disk 4GiB \
  -define registry:cache:hosts=192.168.100.50:6668,192.168.100.51:6668 \
  myhugeimage.jpg -sharpen 5x2 myhugeimage.png
</code></pre>
<p>For large image sequences, the servers are contacted in a round-robin fashion to distribute the load over multiple distributed pixel caches (assuming you have a host list rather than a single host).  In our example, some modest resources are available on the desktop as defined by the -limit option.  For smaller images, they are allocated on the desktop up to the specified limits.</p>
<p>Your image processing tasks are likely to perform slower when utilizing a distributed pixel cache due to pixels shuffling between the client and the server over a network.  Algorithms that access virtual pixels (e.g. -sharpen) are noticeably slower, up to 3 times slower, than algorithms that only access authentic pixels (e.g. -negate) due to increased network traffic.</p>
<p>A client can only contact a compatible distributed pixel cache server.  Compatibility requires the same ImageMagick library interface, quantum depth, HDRI status, OS word size, and endianness.  The distributed pixel cache checks these attributes and exits if these requirements are not met.</p>
</div>
