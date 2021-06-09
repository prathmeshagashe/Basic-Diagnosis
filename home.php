<?php
include 'header1.php';
include 'style.php';
?>

<html>
	<head>
		<title>Home Page</title>
		<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="particles-js">
			<div class="container">
				<form  method="post" action="result.php">
					<h1>BASIC DIAGONOSIS</h1>
					
					<h2>Enter 3 Symptoms</h2>



    <p>1st Symptom</p>
  <select name="one" required>
    <option value="fever">fever</option>
    <option value="body pain">body pain</option>
    <option value="poor appetite">poor appetite</option>
	<option value="nausea">nausea</option>
	<option value="itching">itching</option>
	<option value="rash">rash</option>
	<option value="red spots">red spots</option>
	<option value="blisters">blisters</option>
	<option value="runny nose">runny nose</option>
	<option value="sore throat">sore throat</option>
	<option value="cough">cough</option>
	<option value="mild headache">mild headache</option>
	<option value="sneezing">sneezing</option>
	<option value="sudden high fever">sudden high fever</option>
	<option value="severe headache">severe headache</option>
	<option value="vomitting">vomitting</option>
	<option value="abdominal pain">abdominal pain</option>
	<option value="shivering">shivering</option>
	<option value="chills">chills</option>
	<option value="sweating">sweating</option>
	<option value="high fever">high fever</option>
	<option value="shortness in breathing">shortness in breathing</option>
	<option value="wheezing">wheezing</option>
	<option value="swollen neck/goiter">swollen neck/goiter</option>
	<option value="poor appetite">loss of balance</option>
	<option value="weight gain">weakness</option>
	<option value="photphobia(pain in eyes by looking at bright light)">photphobia(pain in eyes by looking at bright light)</option>
	<option value="dizziness">dizziness</option>
	<option value="excessive thirst and hunger">excessive thirst and hunger</option>
	<option value="blurry vision">blurry vision</option>
	<option value="weight loss">weight loss</option>
	<option value="weight gain">weight gain</option>
	<option value="pale face">pale face</option>
	<option value="dark urine">dark urine</option>
	<option value="frequent urination">frequent urination</option>
	<option value="headache">headache</option>
	<option value="double vission">double vission</option>
	<option value="difficulty walking">difficulty walking</option>
	
 </select>
    <br><br>
    <p>2nd Symptom</p>
  <select name="two" required>
     <option value="fever">fever</option>
    <option value="body pain">body pain</option>
    <option value="poor appetite">poor appetite</option>
	<option value="nausea">nausea</option>
	<option value="itching">itching</option>
	<option value="rash">rash</option>
	<option value="red spots">red spots</option>
	<option value="blisters">blisters</option>
	<option value="runny nose">runny nose</option>
	<option value="sore throat">sore throat</option>
	<option value="cough">cough</option>
	<option value="mild headache">mild headache</option>
	<option value="sneezing">sneezing</option>
	<option value="sudden high fever">sudden high fever</option>
	<option value="severe headache">severe headache</option>
	<option value="vomitting">vomitting</option>
	<option value="abdominal pain">abdominal pain</option>
	<option value="shivering">shivering</option>
	<option value="chills">chills</option>
	<option value="sweating">sweating</option>
	<option value="high fever">high fever</option>
	<option value="shortness in breathing">shortness in breathing</option>
	<option value="wheezing">wheezing</option>
	<option value="swollen neck/goiter">swollen neck/goiter</option>
	<option value="poor appetite">loss of balance</option>
	<option value="weight gain">weakness</option>
	<option value="photphobia(pain in eyes by looking at bright light)">photphobia(pain in eyes by looking at bright light)</option>
	<option value="dizziness">dizziness</option>
	<option value="excessive thirst and hunger">excessive thirst and hunger</option>
	<option value="blurry vision">blurry vision</option>
	<option value="weight loss">weight loss</option>
	<option value="weight gain">weight gain</option>
	<option value="pale face">pale face</option>
	<option value="dark urine">dark urine</option>
	<option value="frequent urination">frequent urination</option>
	<option value="headache">headache</option>
	<option value="double vission">double vission</option>
	<option value="difficulty walking">difficulty walking</option>
	
  </select>
 
  <br><br>
    <p>3rd Symptom</p>
    <select name="three" required>
     <option value="fever">fever</option>
    <option value="body pain">body pain</option>
    <option value="poor appetite">poor appetite</option>
	<option value="nausea">nausea</option>
	<option value="itching">itching</option>
	<option value="rash">rash</option>
	<option value="red spots">red spots</option>
	<option value="blisters">blisters</option>
	<option value="runny nose">runny nose</option>
	<option value="sore throat">sore throat</option>
	<option value="cough">cough</option>
	<option value="mild headache">mild headache</option>
	<option value="sneezing">sneezing</option>
	<option value="sudden high fever">sudden high fever</option>
	<option value="severe headache">severe headache</option>
	<option value="vomitting">vomitting</option>
	<option value="abdominal pain">abdominal pain</option>
	<option value="shivering">shivering</option>
	<option value="chills">chills</option>
	<option value="sweating">sweating</option>
	<option value="high fever">high fever</option>
	<option value="shortness in breathing">shortness in breathing</option>
	<option value="wheezing">wheezing</option>
	<option value="swollen neck/goiter">swollen neck/goiter</option>
	<option value="poor appetite">loss of balance</option>
	<option value="weight gain">weakness</option>
	<option value="photphobia(pain in eyes by looking at bright light)">photphobia(pain in eyes by looking at bright light)</option>
	<option value="dizziness">dizziness</option>
	<option value="excessive thirst and hunger">excessive thirst and hunger</option>
	<option value="blurry vision">blurry vision</option>
	<option value="weight loss">weight loss</option>
	<option value="weight gain">weight gain</option>
	<option value="pale face">pale face</option>
	<option value="dark urine">dark urine</option>
	<option value="frequent urination">frequent urination</option>
	<option value="headache">headache</option>
	<option value="double vission">double vission</option>
	<option value="difficulty walking">difficulty walking</option>
	
		</select>
  <br><br>
 <input type="submit"></input>
</form>
			</div>
		</div>
	</body>
</html>