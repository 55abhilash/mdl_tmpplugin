<?php
/* A temporary function
   which prints the global variable
   CFG. And exits.
*/
function tmpfunc() {
	global $CFG;
	echo "CFG PRINT STARTS...\n";
	echo $CFG;
	echo "CFG PRINT ENDS\n";
}
