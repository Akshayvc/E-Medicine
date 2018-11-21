<?php
include('dbcon.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select pid,medicine_name from medicine where medicine_name like '$q%' limit 5 ");
while($row=mysql_fetch_array($sql_res))
{
$medicine_name=$row['medicine_name'];
$m_name='<strong>'.$q.'</strong>';
$final_mname = str_ireplace($q, $m_name, $medicine_name);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_mname; ?></span>
</div>
<?php
}
}
?>
