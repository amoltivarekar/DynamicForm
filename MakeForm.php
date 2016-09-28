<html>
	<head>
		<title>
			MakeForm
		</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style3.css" type="text/css">
		<script src="http://localhost/PHP%20WORK/jquery-2.1.3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				var j=k=l=m=n=o=p=0;
				$("#btnAdd").click(function()
				{
					if($("#lablename").val()!="")
					{
						if($("#chType").val()!="Select")
						{
						var data = $("#opt").val();
						var arr = data.split(",");
						var value=arr.length;
						var i=0;

					 	html_block = "";
					 	html_block += "<div><table width='60%'>";
					 	chval="";
					 	
					 	var lblvalue = $("#lablename").val();
						var chvalue = $("#chType").val();
				 				
						if(chvalue=="Form Name")
						{
							html_block +="<h2>"+lblvalue+"</h2><input type='hidden' name='form' value='"+lblvalue+"' >";
						}
						
						if(chvalue=="TextField")
						{

							html_block += "<tr><td width='30%'><span>"+lblvalue+": </span></td><td><input type='hidden' name='Lbl1"+j+"' value="+lblvalue+"></td>";
							html_block += "<td width='70%'><input type='text'/></td><td><input type='hidden' name='TextField"+j+"' value='text'></td></tr><input type='hidden' name='txtcount' value='"+j+"'>";
							j++; 
						}
						else if(chvalue=="Check Box")
						{
							html_block += "<tr><td width='30%'><span>"+lblvalue+": </span></td><input type='hidden' name='Lbl2"+k+"' value="+lblvalue+"></td><td width='70%'>";
							while(i<value)
							{
								chval+=arr[i]+",";
	  							html_block +="<input type='checkbox'><input type='hidden' name='checkbox"+k+"' value='checkbox'><input type='hidden' name='checkboxvalues"+k+"' value="+chval+">"+arr[i];
	  							i++;
	  						}
	  						html_block += "</td></tr><input type='hidden' name='chkcount' value='"+k+"'>";
	  						k++;
						}
						else if(chvalue=="Radio Button")
						{
							html_block += "<tr><td width='30%'><span>"+lblvalue+": </span></td><input type='hidden' name='Lbl3"+l+"' value="+lblvalue+"></td><td width='70%'>";
							while(i<value)
							{
								chval+=arr[i]+",";
	  							html_block +="<input type='radio' name='radio'><input type='hidden' name='radio"+l+"' value='radio'><input type='hidden' name='radiovalues"+l+"' value="+chval+">"+arr[i];
	  							i++;
	  						}
	  						html_block += "</td></tr><input type='hidden' name='rdcount' value='"+l+"'>";
	  						l++;
						}
						else if(chvalue=="Chombo Box")
						{
							html_block += "<tr><td width='30%'><span >"+lblvalue+": </span></td><input type='hidden' name='Lbl4"+m+"' value="+lblvalue+"><input type='hidden' name='select"+m+"' value='select'></td><td width='70%'>";
							html_block += "<select>";
							while(i<value)
							{
								chval+=arr[i]+",";
	  							html_block +="<option name='opt'>"+arr[i]+"</option>";	  							
	  							i++;
	  						}
	  						html_block += "</select><input type='hidden' name='selectvalues"+m+"' value="+chval+"></td></tr><input type='hidden' name='chombocount' value='"+m+"'>";
	  						m++;
						}
						else if(chvalue=="File")
						{ 
							html_block += "<tr><td width='30%'><span>"+lblvalue+": </span></td><input type='hidden' name='Lbl5"+n+"' value="+lblvalue+"></td>";
							html_block += "<td width='70%'><input type='file'/></td><td><input type='hidden' name='file"+n+"' value='file'></td></tr><input type='hidden' name='filecount' value='"+n+"'>";
							n++;
						}
						else if(chvalue=="Password")
						{ 
							html_block += "<tr><td width='30%'><span>"+lblvalue+": </span></td><input type='hidden' name='Lbl6"+o+"' value="+lblvalue+"></td>";
							html_block += "<td width='70%'><input type='password'/></td><td><input type='hidden' name='password"+o+"' value='password'></td></tr><input type='hidden' name='passcount' value='"+o+"'>";
							o++;
						}
						else if(chvalue=="Textarea")
						{ 
							html_block += "<tr><td width='30%'><span>"+lblvalue+"</span></td><input type='hidden' name='Lbl7"+p+"' value="+lblvalue+"></td>";
							html_block += "<td width='70%'><textarea></textarea></td><td><input type='hidden' name='textarea"+p+"' value='textarea'></td></tr><input type='hidden' name='tareacount' value='"+p+"'>";
							p++;
						}
						html_block += "</table></div><hr width='60%''>";
						$("#div2").append(html_block);
						}
						else
						{
							alert("Type Field Must Be Field Out");
						}
					}
					else
					{
						alert("Label Name Must Be Field Out");
					}
				});
				$("#chType").change(function()
				{
					var chvalue = $("#chType").val();
					if(($("#chType").val()=="Chombo Box") || ($("#chType").val()=="Check Box") || ($("#chType").val()=="Radio Button"))
					{
        				$("#panel").slideDown("slow");
        			}
    			});
    			$("#opt").blur(function()
    			{
        			$("#panel").slideUp("slow");
    			});
			});

		</script>
	</head>
	<body>
		<form>
			<center>
				<table width="60%">
					<tr>
						<td>
							<h3>Enter Your Lable Name</h3>
						</td>
						<td>
							<input type="text" id="lablename" placeholder="Lable Name" required="true">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Select Your Type Field </h3>
						</td>
						<td>
							<select name="typefield" class="combo" id="chType">
								<option>Select</option>
								<option>Form Name</option>
								<option>TextField</option>
								<option>Check Box</option>
								<option>Radio Button</option>
								<option>Chombo Box</option>
								<option>File</option>
								<option>Password</option>
								<option>Textarea</option>							
							</select>
						</td>
					</tr>
					
				</table>
				<div id="panel">
					<h3>How Many Items You Want : </h3>
					<textarea name="options" id="opt" ></textarea>
				</div>
				<br><br><br>
				
				<input type="button" value="ADD" id="btnAdd">
			</center>	
		</form>
		<form action="serialize.php" method="POST" >
			<center>
				<div id="div1"></div>
				<div id="div2"><table></table></div>
				<br>

				<input type="submit" value="SAVE" name="submit">
			</center>
		</form>
	</body>
</html>
