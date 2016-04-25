<?php
$show_path = 0;   # Show local path.
$show_dotdirs = 0;   # Show '.' and '..'.
$path = substr($_SERVER['SCRIPT_FILENAME'], 0,
    strrpos($_SERVER['SCRIPT_FILENAME'], '/') + 1);
?>
  <head>
    <title>Linux Deployment CaC server</title>
    <style type="text/css">
      tablecont{
	position:absolute;
        clear:both;
	top:10em;
	width:10em;
	right:50%;
	margin-right:7em;	
      }
      infotext{
	font-size: 1.5em;
	font-family: "arial";
	position: absolute;
        color: ffffff;
        text-align: center;
        width: 100%;
        top: 2em;
      }
      body,
      th,
      td {
	font-family: "arial";
        background-color: #000000;
      }
      a:link {
        color: #666666;
        text-decoration: underline;
      }
      a:visited {
        color: #444444;
        text-decoration: underline;
      }
      a:hover {
        color: #666666;
        text-decoration: none;
      }
      a:active {
        color: #660000;
        text-decoration: none;
      }
      table {
        background-color: #222222;
        border: #cccccc solid .1em;
        border-spacing: .1em;
        width: 36em;
      }
      th {
        background-color: #4466aa;
        color: #ffffff;
        font-size: 1.1em;
        font-weight: bold;
        text-align: left;
        padding: .2em;
      }
      td {
        background-color: #eeeeee;
        color: #666666;
        font-size: .9em;
        font-weight: normal;
        padding: .6em;
      }
    </style>
  </head>
  <body>

<infotext>
<b><u>Linux Deployment CaC server</u></b> <br/><br/>
Please use with compatible boot image (downloads below)<br/><br/>
</infotext>

<tablecont>
    <table cellspacing="1">
      <tr>
        <td>
<?php
$dirs = array();
$files = array();
$dir = dir($path."/downloads");
while ($entry = $dir->read()) {
    if (($entry != '.') and (substr($entry, -4) != '.php')) {
        if (is_dir($entry)) {
            if (($entry != '..') or $show_dotdirs){
                $dirs[] = $entry;
            }
        } else {
            $files[] = $entry;
        }
    }
}
$dir->close();
sort($dirs);
foreach ($dirs as $dir) {
    printf('<strong>&lt;</strong> <a href="%s">%s</a> <strong>&gt;</strong><br />' . "\n", $dir, $dir);
}
sort($files);
foreach ($files as $file) {
    printf('<a href="%s">%s<br />' . "\n", $file, $file);
}
?>
        </td>
      </tr>
    </table>
</tablecont>

   </body>
