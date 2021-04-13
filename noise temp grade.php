<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <style>
    .yash{
      background-color: aqua;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
    }
    body{
      background-image:url("https://res.cloudinary.com/grohealth/image/upload/$wpsize_!_cld_full!,w_2121,h_1414,c_scale/v1588111252/iStock-868098786.jpg");
    }
    
  </style>
</head>

<body>

	<div id="page-wrap">

		<h1>Final Result for Noise</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
	<div class="buttons">
	<a href="index.php">
    <button class="yash">Home</button>
	</a>
</div>
<style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: grey; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

</style>
<h2>Answers</h2>

<p><strong>Note:</strong> Please read the Answers with Solution and Re-try for the quiz</p>

<p>Question 1: Deduce the approximate value of Noise temperature (Teq), when Noise figure is 3dB.
(Take To= 300k)</br>
Answer: B (298k)</br>
Explanation: Noise Factor = AL(Noise Figure/10) = 10^(Noise Figure/10). Noise Temperature = (F-1)*To = (F-1)*300
  </p></br>

<p>Question 2: If Noise factor of one system is 2.5 and that for the second system is 2.8, then the relation between their Noise temperatures 
(NT) will be ________.</br>
Answer: B ( NT1 < NT2)</br>
Explanation: Noise Temperature is directly proportional to Noise Factor. Hence, (NT)1 < (NT)2
 </p></br>

<p>Question 3:Deduce the approximate value of Noise temperature (Teq), when Noise figure is 4dB.
(Take To= 300k)
</br>
Answer: A ( 453k)</br>
Explanation: Noise Factor = AL(Noise Figure/10) = 10^(Noise Figure/10). Noise Temperature = (F-1)*To = (F-1)*300
 </p></br>

<p>Question 4: For the equivalent Noise temperature (Teq) be equal to temperature (T0),
</br>
Answer: C (Noise Figure = 3dB)</br>
Explanation: When Teq=To, then Noise Factor = 1 + Teq/To = 1+1 = 2. Therefore, Noise Figure = 10 log (2) = 3dB. </p></br>

<p>Question 5: How are Noise Factor (F) and Noise Temperature (Teq) related?</br>
Answer: D (  Teq = (F-1) To)</br>
Explanation: Conceptual, Teq=(F-1)*To. </p></br>


<p>Question 6: If Noise figure of one system is 2.5dB and 
that for the second system is 2.8dB and third 
system is 2.3dB, then the relation between 
their Noise temperatures (NT) will be </br>
Answer: C (  NT3 < NT1 < NT2)</br>
Explanation: Noise Temperature is directly proportional to Noise Figure. 
 </p></br>

 <p>Question 7: The expression of Noise Power in dB is 
expressed as _______________.
</br>
Answer: C ( 10 log10 (N(mW)/1mW))</br>
Explanation: Conceptual, 10 log10 (N(mW)/1mW)
 </p></br>

 <p>Question 8: Deduce the approximate value of Noise temperature (Teq), when Noise figure is 1dB.
(Take To= 300k)
</br>
Answer: D (77.67k )</br>
Explanation: Noise Factor = AL(Noise Figure/10) = 10^(Noise Figure/10). Noise Temperature = (F-1)*To = (F-1)*300
 </p></br>

 <p>Question 9:  The noise temperature at a resistor depends upon</br>
Answer: B (Noise power )</br>


 </p></br>

 <p>Question 10: Noise voltage Vn and absolute temperature T are related as</br>
Answer: C ( Vn = √(4RKTB) )</br>


 </p></br>

</body>

</html>