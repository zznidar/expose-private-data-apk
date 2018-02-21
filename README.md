# expose-private-data-apk
Testing if https://github.com/zznidar/expose-private-data can also be put into an .apk file.

Test passed. Any app could theoretically steal any (private, sensitive) data you have recently visited on your phone (i. e. was shown on your screen), in case your device is affected.

The APK sends the data to http://192.168.1.18:81/graphics/graphics.php because the download buttons do not work.
The PHP was served with UwAmp server on a local network, created specifically for that purpose. 

The PHP script writes the .png files to /pic subfolder.
