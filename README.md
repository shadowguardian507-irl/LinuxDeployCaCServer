# LinuxDeployCaCServer
persistent configuration deployment system


note you should prevent direct access to the config dirs via your web server software, eg in nginx add the following to your config for the site

location /systemconfigs-available {
  deny all;
  return 412;
  }
location /systemconfigs-enabled {
  deny all;
  return 412;
  }
