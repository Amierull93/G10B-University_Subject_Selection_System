<?php
include "connection.php";

session_start();
if (!isset($_SESSION['ID'])){
header("location:login.php"); }

$query = mysql_query("select * from student where S_ID = '$_SESSION[ID]'") or die(mysql_error());
$row = mysql_fetch_array($query);
	
?>
<html>
<head>
<title>Student</title>
<link href="lecturer.css" rel="stylesheet" type="text/css"/>
<style type="text/css">

</style>
</head>

<body >

<div style="border-width:4px;border-style:solid;width:1300px;background:white;margin-left:auto;margin-right:auto;">	
		<img class="da"src="./images/mmu logo.png"></td>
</div>
	<nav style="width:1300px;margin-left:auto;margin-right:auto;">
	<ul>
		<li style="width:300px"><a href="https://www.mmu.edu.my">MMU WEBSITE</a></li>
		<li style="width:300px"><a href="#">ABOUT MMU</a>
			<ul>
				<li><a href="https://www.mmu.edu.my/index.php?req=110">A Word from the President</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=21">The University</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=114">The People</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=36">Faculties</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=37">Divisions</a></li>
                <li><a href="http://research.mmu.edu.my/" target="_blank">Research</a></li>
                <li><a href="http://vlib.mmu.edu.my/" target="_blank">Library</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=146">Awards</a></li>
                <li><a href="http://registry.mmu.edu.my/" target="_blank">Registry of Graduates</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=d57&id=975">MMU 2.0</a></li>
			</ul>
		</li>
		<li style="width:300px"><a href="#">RESOURCES</a>
			<ul>
				<li><a href="http://onlinecyber.mmu.edu.my/" target="_blank">MMU Portal</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=116">Academic Calendar</a></li>
                <li><a href="http://webmail.mmu.edu.my/" target="_blank">Webmail</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=48">MMLS</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=d68&id=200">Careers</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=d57&id=895">Branding</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=d48&id=620">MMU Facilities for Rent</a></li>
                <li><a href="https://www.mmu.edu.my/index.php?req=d48&id=900">MMU Souvenirs</a></li>
                <li><a href="http://e-publication.mmu.edu.my/" target="_blank">e-Publication</a></li>
                <li><a href="http://www.mmc.edu.my/" target="_blank">Multimedia College (MMC)</a></li>
                <li><a href="http://e-publication.mmu.edu.my/files/cat_4/POST_56/index.html">MMU Cnergy</a></li>
			</ul>
		</li>
		<li style="width:350px"><a href="#">FACULTIES</a>
			<ul>
                <li><a href="http://foe.mmu.edu.my" target="_blank">Engineering</a></li>
                <li><a href="http://fit.mmu.edu.my" target="_blank">Computing &amp; Informatics</a></li>
                <li><a href="http://fom.mmu.edu.my/" target="_blank">Management</a></li>
                <li><a href="http://creative.mmu.edu.my" target="_blank">Creative Multimedia</a></li>
                <li><a href="http://fet.mmu.edu.my" target="_blank">Engineering &amp; Technology</a></li>
                <li><a href="http://fist2.mmu.edu.my/" target="_blank">Information Science &amp; Tech.</a></li>
                <li><a href="http://fob.mmu.edu.my/" target="_blank">Business</a></li>
                <li><a href="http://law.mmu.edu.my/" target="_blank">Law</a></li>
                <li><a href="http://cdp.mmu.edu.my/" target="_blank">Centre for Diploma Programmes</a></li>
                <li><a href="https://www.mmu.edu.my.index.php?req=150">Learning Institute for Empowerment (LiFE)</a></li>
			</ul>
		</li>
	</ul>
	</nav>
	
	<div id="left-container">
		&nbsp;
		<a class="top" href="Student.php"> <img src="./images/home.png" class="img3" alt="Home" style="vertical-align: middle;"></img><span style="vertical-align: bottom;"> &nbsp;Home</span></a></br>
		&nbsp;
		<a class="top" href="subject_registration.php"> <img src="./images/subject.png" class="img3" alt="profile" style="vertical-align: middle;"></img><span style="vertical-align: bottom;">&nbsp;Subject</span></a></br>
		&nbsp;
		<a class="top" href="login.php"> <img src="./images/logout.png" class="img3" alt="logout" style="vertical-align: middle;"></img><span style="vertical-align: bottom;">&nbsp;Logout</span></a>
		&nbsp;
		&nbsp;
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	
	
	
	
	</div>
	<div id="right-container"><br>
	<h1 class="h1" style="align:center;">Add Subject</h1><br>
		<div class="container2">
			
				
					
						<?php
					
					$result0 = mysql_query("select faculty_name from faculty  LEFT JOIN student ON faculty.faculty_ID = student.faculty_ID  where S_ID='$_SESSION[ID]'") or die(mysql_error());
					$row0 = mysql_fetch_array($result0); 
					
					$result00 = mysql_query("select programe_name from program  LEFT JOIN student ON program.PID = student.PID  where S_ID='$_SESSION[ID]'") or die(mysql_error());
					$row00 = mysql_fetch_array($result00); ?>
					
			<form name="reg_form" action="subject_registration_code.php" method="POST" style="margin-left:30px;">
				<table>
						<tr>
							<td style="font-weight:bold">Name </td>
							<td style="font-weight:bold"> : </td> 
							<td><?php echo $row['name'] ?></td>
						</tr>
						<tr>
							<td style="font-weight:bold">Student ID </td>
							<td style="font-weight:bold"> : </td>						
							<td><?php echo $row['std_id'] ?></td>
						</tr>
						<tr>
							<td style="font-weight:bold">Faculty </td>
							<td style="font-weight:bold"> : </td>
							<td><?php echo $row0['faculty_name'] ?></td>
						</tr>
						<tr>
							<td style="font-weight:bold">Programme </td>
							<td style="font-weight:bold"> : </td>
							<td><?php echo $row00['programe_name'] ?></td>
						</tr>
						<tr>
							<td style="font-weight:bold">Intake </td>
							<td style="font-weight:bold"> : </td>
							<td><?php echo $row['intake'] ?></td>
						</tr>
						<tr>
							<td style="font-weight:bold">Semester </td>
							<td style="font-weight:bold"> : </td>
							<td><?php echo $row['semester'] ?></td>
						</tr>
				<tr>
							<td style="font-weight:bold">Subject Offer</td>
							<td style="font-weight:bold"> : </td>
			<td><?php
				$query000 = mysql_query("select sub_name from subject LEFT JOIN student ON subject.faculty_ID=student.faculty_ID where S_ID='$_SESSION[ID]'"); 

				echo '<select name="drop">'; 

				
				while ($row000 = mysql_fetch_array($query000)) 
				{
				echo '<option value="'.$row000['sub_name'].'">'.$row000['sub_name'].'</option>';
				}

				echo '</select>';
			?></td>
			</table>
			<br>
			
			  <input type="submit" value="Add Subject">
			</form>			
			
				
				
		</div>

	<h1 class="h12" style="align:center;">Remove Subject</h1>
			<div class="container2">
			<?php
				$result12 = mysql_query("select * from stud_sub INNER JOIN subject ON stud_sub.sub_ID=subject.sub_ID where S_ID='$_SESSION[ID]'"); ?>
				<br>
				
<?php
				echo'<table border="1" style="margin:auto;" ><th >SUBJECT CODE</th><th>SUBJECT NAME</th><th>DELETE</th>';
				while($res=mysql_fetch_array($result12))
				{
				$sub_ID = $res['stud_sub_id'];
		
					echo'<tr><td>'.$res['sub_code'].'</td><td>'.$res['sub_name'].'</td><td><a href=delete_code.php?stud_sub_id=$sub_ID><img src=images/delete.png width=15 border=0 height=15 title=Delete></img></td></tr>';
				}
				echo'</table>';
	?>
			</div>

</body>.
</html>
