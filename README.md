# Lil' Notices

Admin notices can get really annoying. Make them better.

# Basic Usage

##Installation

###Automated remote installation
* We recommend you install this plugin using [GitHub Updater remote installations](https://github.com/afragen/github-updater/blob/develop/README.md#remote-installation-of-repositories)

[![Video on installing plugin with Github Updater](http://img.youtube.com/vi/0JUGswsLSX0/0.jpg)](https://www.youtube.com/watch?v=0JUGswsLSX0)



###Manual Installation
1. Download the latest [tagged archive](https://github.com/afragen/github-updater/releases) (choose the "zip" option).
2. Unzip the archive, rename the folder correctly to `github-updater`, then re-zip the file.
3. Go to the __Plugins -> Add New__ screen and click the __Upload__ tab.
4. Upload the zipped archive directly.
5. Go to the Plugins screen and click __Activate__.
## Advanced Options
* There are no UIX options related to this plugin, its just plug-and-play

# How it works details
## Summary
Cache all WordPress REST requests made via `wp_remote_get()` in a custom table. 
After using transients and option rows to cache REST calls with limited success 
due to the unpredictability of how memcached or other setups would handle many 
calls, we moved all REST calls into their own table. This is especially useful 
where the same call in a multisite network may be made on many sites: the same 
response can be reused and only requires one MYSQL lookup.
