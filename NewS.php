<form action="index.php" method="post">
First name: <br>
   <input type="text" name="name" maxlength="20" minlength = "3">
<br> <br>
Last Name: <br>    
    <input type="text" name="name" maxlength="20" minlength = "3">
<br> <br>
Student ID: <br>
   <input type="text" name='Id' maxlength="7" minlength = "7">
<br> <br>
Email <br>
    <input type="text" name='Email' max length="20" minlength = "8">
    <br><br>
Major: <br>
   <select name="major" > 
	<option value="Undecided">Undecided</option>
	<option value="CMSC" selected>CMSC</option>
	<option value="CMPE" >CMPE</option>
	<option value="COMP">COMP</option>
	<option value="ENES">ENES</option>
	<option value="ENCH">ChemE</option>
	<option value="ENME">MechE</option>
	<option value="Other">Other</option>
   </select>
<br> <br>
<select name="advsType">
<option value="Individual" selected>Individual</option> 
<option value="Group">Group</option>    
</select>
    
Advisor preffered:
<br>
<select name="advis">
  <option value="Any Individual" selected>Any Indidual</option>
  <option value="Josh Abrams">Josh Abrams</option>
  <option value="Anne Arey">Anne Arey</option>
  <option value="Emily Stephens">Emily Stephens</option>
</select> 
<br><br>
<input type="submit">