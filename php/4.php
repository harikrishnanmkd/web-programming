<html>
<body bgcolor="Crimson">
<h4></h4>
<?php
$name=["HARI","VYSHNAV","KARTHIK","ASWIN","MAANAS","MINHAJ","NIHAL","AKSHAY","NILEENA(C)","MISHAB","VISHNU"];
$role=["BOWLER","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","SPIN BOWLER","BATSMAN","ALL ROUNDER"];
echo "STARTING VI";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
