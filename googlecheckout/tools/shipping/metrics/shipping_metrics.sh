#!/bin/bash
COUNT=0

for i in `seq 1 1008`; do
let COUNT=$COUNT+1

echo "----------------------------------" >> ./shipping_metrics.log
echo "Iteration: $COUNT" >> ./shipping_metrics.log
echo "Date: $(date)" >> ./shipping_metrics.log
echo "Rate Time(sec):" >> ./shipping_metrics.log
echo "$(php ./shipping_metrics_commandline.php)" >> ./shipping_metrics.log
echo "----------------------------------" >> ./shipping_metrics.log

sleep 600

done
