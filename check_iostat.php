<?php
$ds_name[1] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[1] = "--vertical-label \"$UNIT[1]\" --title \"$hostname / $servicedesc read/write kbs\" ";

$def[1] = rrd::def("var1", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::def("var2", $RRDFILE[2], $DS[2], "AVERAGE");

$def[1] .= rrd::line2("var1", "#ff0066", "$NAME[1]") ;
$def[1] .= rrd::gprint("var1", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var2", "#6600ff", "$NAME[2]") ;
$def[1] .= rrd::gprint("var2", array("LAST", "AVERAGE", "MAX"), "%6.2lf");


$ds_name[2] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[2] = "--vertical-label \"$UNIT[3]\" --title \"$hostname / $servicedesc wait ms\" ";

$def[2] = rrd::def("var3", $RRDFILE[3], $DS[3], "AVERAGE");

$def[2] .= rrd::line1("var3", "#000000", "$NAME[3]") ;
$def[2] .= rrd::gprint("var3", array("LAST", "AVERAGE", "MAX"), "%6.2lf");


$ds_name[3] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[3] = "--vertical-label \"$UNIT[4]\" --title \"$hostname / $servicedesc utilisation\" ";

$def[3] = rrd::def("var4", $RRDFILE[4], $DS[4], "AVERAGE");

$def[3] .= rrd::line1("var4", "#cc0000", "$NAME[4]") ;
$def[3] .= rrd::gprint("var4", array("LAST", "AVERAGE", "MAX"), "%6.2lf");


$ds_name[4] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[4] = "--vertical-label \"$UNIT[5]\" --title \"$hostname / $servicedesc requests/s\" ";

$def[4] = rrd::def("var5", $RRDFILE[5], $DS[6], "AVERAGE");
$def[4] .= rrd::def("var6", $RRDFILE[6], $DS[6], "AVERAGE");

$def[4] .= rrd::line2("var5", "#ff0011", "$NAME[5]") ;
$def[4] .= rrd::gprint("var5", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[4] .= rrd::line1("var6", "#1100ff", "$NAME[6]") ;
$def[4] .= rrd::gprint("var6", array("LAST", "AVERAGE", "MAX"), "%6.2lf");

?>