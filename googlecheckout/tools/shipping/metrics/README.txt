This can be run from shell

ship_metrics.sh is a little bash script to run OSCommerce Shiping Metrics
every 10 minutes and echo results, run count and times to a log.

how to runit on a linux box

$ ship_metrics.sh &

This will make the script run in background. Now is seted to run 1008 times, 
with intervals of 10 minutes each run.

If you like, email me the result of the run (no need to do the 1008, you can stop
it before) and address me some info to know if your connection is fast, your
location (no need to be exact).

md1.atx.tiger@globant.com

Remember to give write permissions to shipping_metrics.log

This script must be located inside googlecheckout/tools/shipping/metrics/
Right now test 3 quotes fedex1, upsxml and all the quotes. 
(Note neither fedex1 nor upsxml came by default in osc)

If you want to test more individual times add the code for each shipper in line 32
CODE
$shippers = array();
$shippers[] = "fedex1";
$shippers[] = "upsxml";

but remember that GC modules uses the all method quote retrieval.
Thx to curt for the idea a base script

ropu