<?php

echo date("現在格林威治時間為Y年n月j日l G時i分s秒",time()); 

$changed=strtotime("+8 hours")."<br/>";
echo date("現為台灣標準時間為Y年n月j日l G點i分s秒",$changed)."<br/>";

$date_time_array=getdate(time());
echo $date_time_array["year"];
echo "年";
echo $date_time_array["mon"];
echo "月";
echo $date_time_array["mday"];
echo "日";
echo "星期";
echo $date_time_array["wday"]."<br/>";

if($date_time_array["mon"]==1)
{
	echo "<img src=1月.png>"."<br/>";
}
	else if ($date_time_array["mon"]==2) 
	{
		echo "<img src=2月.png>"."<br/>";
	}
		else if($date_time_array["mon"]==3)
		{
			echo "<img src=3月.png>"."<br/>";
		}
			else if ($date_time_array["mon"]==4) 
			{
				echo "<img src=4月.png>"."<br/>";
			}
				else if ($date_time_array["mon"]==5) 
				{
					echo "<img src=5月.png>"."<br/>";
				}
					else if($date_time_array["mon"]==6)
					{
						echo "<img src=6月.jpg>"."<br/>";
					}
						else if($date_time_array["mon"]==7)
						{
							echo "<img src=7月.png>"."<br/>";
						}
							else if($date_time_array["mon"]==8)
							{
								echo "<img src=8月.png>"."<br/>";
							}
								else if($date_time_array["mon"]==9)
								{
									echo "<img src=10月.png>"."<br/>";
								}
									else if($date_time_array["mon"]==11)
									{
										echo "<img src=11月.jpg>"."<br/>";
									}
										else if($date_time_array["mon"]==12)
										{
											echo "<img src=12月.jpg>"."<br/>";
										}





$today=date("Y-n-j G:i:s");
$day=("2017-12-31 23:59:59");
$D=(int)((strtotime($day)-strtotime($today))/(86400));                      //計算相差之天數;
$H=(int)(((strtotime($day)-strtotime($today))%(86400))/(3600));             //計算相差之小時數;
$M=(int)((((strtotime($day)-strtotime($today))%(86400))%(3600))/(60));      //計算相差之分鐘數;
$S=(int)((((strtotime($day)-strtotime($today))%(86400))%(3600))%(60));;

echo "距離世界末日";
echo $D;
echo "天";
echo $H;
echo "小時";
echo $M;
echo "分鐘";
echo $S;
echo "秒";
?>  