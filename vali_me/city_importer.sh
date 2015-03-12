#!/bin/bash
for i in `cat GeoIPbg.csv`
do
	echo $i
name=`echo "$i"|cut -d, -f4|cut -d, -f1`
lat=`echo "$i"|cut -d, -f6|cut -d, -f1`
lon=`echo "$i"|cut -d, -f7|cut -d, -f1`

	echo "INSERT INTO exem_results.cities (id, name, lat, lon) VALUES (NULL, '$name', '$lat', '$lon');" | mysql -h localhost -uweb_course --password=asdasd123

done

