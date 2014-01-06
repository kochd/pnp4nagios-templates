<?php
$ds_name[1] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[1] = "--vertical-label \"$UNIT[1]\" --title \"$hostname / $servicedesc / RAM\" ";

$def[1] = rrd::def("var1", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::def("var2", $RRDFILE[2], $DS[2], "AVERAGE");

$def[1] .= rrd::area("var1", "#00ff00", "$NAME[1]") ;
$def[1] .= rrd::gprint("var1", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line3("var2", "#000000", "$NAME[2]") ;
$def[1] .= rrd::gprint("var2", array("LAST", "AVERAGE", "MAX"), "%6.2lf");


$ds_name[2] = "$NAGIOS_AUTH_SERVICEDESC"; 
$opt[2] = "--vertical-label \"$UNIT[3]\" --title \"$hostname / $servicedesc / Swap\" ";
$def[2] = rrd::def("var3", $RRDFILE[3], $DS[3], "AVERAGE");
$def[2] .= rrd::def("var4", $RRDFILE[4], $DS[4], "AVERAGE");

$def[2] .= rrd::area("var3", "#ff0000", "$NAME[3]") ;
$def[2] .= rrd::gprint("var3", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[2] .= rrd::line3("var4", "#000000", "$NAME[4]") ;
$def[2] .= rrd::gprint("var4", array("LAST", "AVERAGE", "MAX"), "%6.2lf");

?>