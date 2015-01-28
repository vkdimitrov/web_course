<h1>info.php</h1>

<select name="year">
<?php
for ($i=1900; $i < 2015; $i++)
{
	#echo '<option value="'.$i.'">'.$i.'</option>';
	echo "<option value=\"$i\">$i</option>";
}
?>
</select>


<select name="days">
<?php
for ($i=1; $i < 31; $i++)
{
	#echo '<option value="'.$i.'">'.$i.'</option>';
	echo "<option value=\"$i\">$i</option>";
}
?>
</select>


<select name="months">
<?php
for ($i=1; $i <= 12; $i++)
{
	$month_name = date( 'F', mktime( 0, 0, 0, $i + 1, 0, 0, 0 ) );
	echo "<option value=\"$i\">$month_name</option>";
}
?>
</select>