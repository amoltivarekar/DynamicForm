<?php
	include'DBConnection.php';
	
	error_reporting(E_ALL & ~E_NOTICE);
	$fdata=[];
	$form=$_POST['form'];
	$lbl5=$_POST['Lbl5'];
	$lbl6=$_POST['Lbl6']; 
	$lbl7=$_POST['Lbl7'];

	$counttxt=$_POST['txtcount'];
	$countchk=$_POST['chkcount'];
	$countrd=$_POST['rdcount'];
	$countchombo=$_POST['chombocount'];
	$countfile=$_POST['filecount'];
	$countpass=$_POST['passcount'];
	$counttarea=$_POST['tareacount'];

	echo "<br>TextField : ".$counttxt;
	echo "<br>checkbox : ".$countchk;
	echo "<br>radio : ".$countrd;
	echo "<br>chombobox :".$countchombo;
	echo "<br>file :".$countfile;
	echo "<br>password :".$countpass;
	echo "<br>textarea :".$counttarea;

	if($counttxt>=0)
	{
		$i=0;
		while($i<=$counttxt)
		{
			$lbl1[$i]=$_POST['Lbl1'.$i];
			if(!empty($lbl1[$i]))
			{
				$type1[$i]=$_POST['TextField'.$i];
				$options1[$i]="NA";
				$text1[$i]=array($lbl1[$i],$type1[$i],$options1[$i]);
				array_push($fdata,$text1[$i]);
			}
			$i++;
		}
	}
	if($countchk>=0)
	{
		$i=0;
		while($i<=$countchk)
		{
			$lbl2[$i]=$_POST['Lbl2'.$i];
			if(!empty($lbl2[$i]))
			{
				$type2[$i]=$_POST['checkbox'.$i];
				$options2[$i]=$_POST['checkboxvalues'.$i];
				$text2[$i]=array($lbl2[$i],$type2[$i],$options2[$i]);
				array_push($fdata,$text2[$i]);
			}
			$i++;
		}
	}
	if($countrd>=0)
	{
		$i=0;
		while($i<=$countrd)
		{
			$lbl3[$i]=$_POST['Lbl3'.$i];
			if(!empty($lbl3[$i]))
			{
				$type3[$i]=$_POST['radio'.$i];
				$options3[$i]=$_POST['radiovalues'.$i];
				$text3[$i]=array($lbl3[$i],$type3[$i],$options3[$i]);
				array_push($fdata,$text3[$i]);
			}
			$i++;
		}
	}
	if($countchombo>=0)
	{
		$i=0;
		while($i<=$countchombo)
		{
			$lbl4[$i]=$_POST['Lbl4'.$i];
			if(!empty($lbl4[$i]))
			{
				$type4[$i]=$_POST['select'.$i];
				$options4[$i]=$_POST['selectvalues'.$i];
				$text4[$i]=array($lbl4[$i],$type4[$i],$options4[$i]);
				array_push($fdata,$text4[$i]);
			}
			$i++;
		}
	}
	if($countfile>=0)
	{
		$i=0;
		while($i<=$countfile)
		{
			$lbl5[$i]=$_POST['Lbl5'.$i];
			if(!empty($lbl5[$i]))
			{
				$type5[$i]=$_POST['file'.$i];
				$options5[$i]="NA";
				$text5[$i]=array($lbl5[$i],$type5[$i],$options5[$i]);
				array_push($fdata,$text5[$i]);
			}
			$i++;
		}
	}
	if($countpass>=0)
	{
		$i=0;
		while($i<=$countpass)
		{
			$lbl6[$i]=$_POST['Lbl6'.$i];
			if(!empty($lbl6[$i]))
			{
				$type6[$i]=$_POST['password'.$i];
				$options6[$i]="NA";
				$text6[$i]=array($lbl6[$i],$type6[$i],$options6[$i]);
				array_push($fdata,$text6[$i]);
			}
			$i++;
		}
	}
	if($counttarea>=0)
	{
		$i=0;
		while($i<=$counttarea)
		{
			$lbl7[$i]=$_POST['Lbl7'.$i];
			if(!empty($lbl7[$i]))
			{
				$type7[$i]=$_POST['textarea'.$i];
				$options7[$i]="NA";
				$text7[$i]=array($lbl7[$i],$type7[$i],$options7[$i]);
				array_push($fdata,$text7[$i]);
			}
			$i++;
		}
	}

	echo ("<br></br>");

	$b=serialize($fdata);
	$insertQuery="INSERT INTO FORMS(FORM_NAME,FORM_DETAILS) VALUES('$form','$b')" or die (mysql_error());

	if(mysqli_query($conn,$insertQuery))
	{
		echo "\n<h3>Record inserted :)</h3>";
	}
	else
	{
		echo "\n<h3>Record not inserted.</h3>";
	}

?>
