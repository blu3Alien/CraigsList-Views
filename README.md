CraigsList-Views
================

A single php file that generates a transparent image and updates a text file with the number of times it has been accessed. This script is perfect for covertly keeping track of the view count of a CraigsList ad. I created this initially to keep track of jobs and services posts for my business.

Usage
=====
Include the script in an image tag on the page you want to covertly keep track of views on. Be sure to provide a unique token for this page.

< img src="http://example.com/index.php?token=CraigsList-ad" />

To view the number of visits, point your browser to the same URL with _&show=true_ added to the end.
http://example.com/index.php?token=CraigsList-ad&show=true
