<?php
$ds_name[1] = "$NAGIOS_AUTH_SERVICEDESC";
$opt[1] = "--vertical-label \"$UNIT[1]\" --title \"$hostname / $servicedesc\" ";
$def[1]  = rrd::def("var1", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::def("var2", $RRDFILE[2], $DS[2], "AVERAGE");
$def[1] .= rrd::def("var3", $RRDFILE[3], $DS[3], "AVERAGE");
$def[1] .= rrd::def("var4", $RRDFILE[4], $DS[4], "AVERAGE");
$def[1] .= rrd::def("var5", $RRDFILE[5], $DS[5], "AVERAGE");
$def[1] .= rrd::def("var6", $RRDFILE[6], $DS[6], "AVERAGE");
$def[1] .= rrd::def("var7", $RRDFILE[7], $DS[7], "AVERAGE");
$def[1] .= rrd::def("var8", $RRDFILE[8], $DS[8], "AVERAGE");
$def[1] .= rrd::def("var9", $RRDFILE[9], $DS[9], "AVERAGE");

if ($WARN[1] != "") {
    $def[1] .= "HRULE:$WARN[1]#FFFF00 ";
}
if ($CRIT[1] != "") {
    $def[1] .= "HRULE:$CRIT[1]#FF0000 ";
}
$def[1] .= rrd::line1("var1", "#5858FA", "$NAME[1]") ;
$def[1] .= rrd::gprint("var1", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var2", "#8A0886", "$NAME[2]") ;
$def[1] .= rrd::gprint("var2", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var3", "#29088A", "$NAME[3]") ;
$def[1] .= rrd::gprint("var3", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var4", "#08298A", "$NAME[4]") ;
$def[1] .= rrd::gprint("var4", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var5", "#088A29", "$NAME[5]") ;
$def[1] .= rrd::gprint("var5", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var6", "#688A08", "$NAME[6]") ;
$def[1] .= rrd::gprint("var6", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var7", "#FE2E2E", "$NAME[7]") ;
$def[1] .= rrd::gprint("var7", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var8", "#0B3B39", "$NAME[8]") ;
$def[1] .= rrd::gprint("var8", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
$def[1] .= rrd::line1("var9", "#0489B1", "$NAME[9]") ;
$def[1] .= rrd::gprint("var9", array("LAST", "AVERAGE", "MAX"), "%6.2lf");
?>