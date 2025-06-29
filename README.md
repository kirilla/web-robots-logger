# web-robots-logger
Silently collecting page requests from robots scouring the net.

It's a web page, written in PHP, which logs all request:

* URI
* IP-address
* Http User agent

But the real star of the show is the .htaccess file.

I created it as a cheap and simple way to collect data on web spiders,
from multiple domains, without the overhead of using databases and complex frameworks.

The point of it is to collect the data.

(And then do something with it.)
