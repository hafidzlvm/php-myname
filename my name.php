<?php
for ( $y=1; $y<10 ;$y++){
for ( $x=1; $x<10 ;$x++){
	if ($x==1 or $x==9)
	{echo '*';}
	elseif ($y==5)
	{echo '*';} else {echo ' ';}
}
echo PHP_EOL;
}

echo PHP_EOL;

for ($p=1;$p<10;$p++){
for ($o=1;$o<10;$o++){
	if ($o+$p==6 or $o==4+$p)
	{echo '*';}
	elseif ($p==5)
	{echo '*';}
	elseif ($o==1 and $p>5 or $o==9 and $p>5)
	{echo '*';} else {echo ' ';}
}
echo PHP_EOL;
}

echo PHP_EOL;

for ($i=1;$i<10;$i++){
for ($u=1;$u<10;$u++){
	if ($i==1 or $i==5)
	{echo '*';} 
	elseif ($u==1)
	{echo '*';} else {echo ' ';}
}
echo PHP_EOL;
}

echo PHP_EOL;

for($y = 1;$y <= 9;$y++){
for($x = 1;$x <= 9;$x++){
	if ($x==5)
	{echo '*';} else {echo ' ';}
}
echo PHP_EOL;
}

echo PHP_EOL;

for($y = 1;$y <= 9;$y++){
  for($x = 1;$x <= 9;$x++){
	if($x==1)
	{echo '*';} 
	elseif($y==1 and $x<6 or $x==4+$y and $x<8 or $x==8 and $y>3 and $y<7 or $y==14-$x and $x<9 or $y==9
	and $x<=5)
	{echo '*';} else  {echo ' ';}
}
echo PHP_EOL;
}

echo PHP_EOL;

for($y = 1;$y <= 9;$y++){
  for($x = 1;$x <= 9;$x++){
	if ($y==1 or $y==9 or $x+$y==10)
	{echo '*';} else {echo ' ';}
}
echo PHP_EOL;
}

?>
