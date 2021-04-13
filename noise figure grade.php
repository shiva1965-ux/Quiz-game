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
      background-image:url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
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

<p>Question 1: When the system is noiseless</br>
Answer: A (  Noise figure = 0dB.)</br>
Explanation:  When the system is Noiseless, (SNR)input = (SNR)output, hence Noise factor = 1. This makes the noise 
figure = 10 log (Noise Factor) = 10 log (1) = 0dB
  </p></br>

<p>Question 2: For a system to be Noise free</br>
Answer: C (Noise factor should be unity)</br>
Explanation: For a noise free system, Noise Factor = 1, because SNR at input will be same as SNR at output. </p></br>

<p>Question 3: What will be the noise figure for a system having noise temperature of 300K?</br>
Answer: A (3.01dB)</br>
Explanation: Noise factor = 1 + Teq/To, Noise Figure = 10 log (Noise Factor) </p></br>

<p>Question 4: When the system is noisy, which of the following is definitely incorrect?</br>
Answer: A (Noise figure = 0dB)</br>
Explanation: Noise Figure for any noisy system can never be equal to 0dB. </p></br>

<p>Question 5: What will be the noise figure for a system having noise temperature of 500K? </br>
Answer: C (4.26dB)</br>
Explanation: Noise factor = 1 + Teq/To, Noise Figure = 10 log (Noise Factor) </p></br>


<p>Question 6: Noise Factor of a system is 4.5, SNR at output is 200. What is SNR at input?</br>
Answer: B (900)</br>
Explanation: Noise Factor = (SNR)input/(SNR)output. Therefore, (SNR)input = Noise Factor * (SNR)output</p></br>

 <p>Question 7: How are Noise Figure (F) and Noise Temperature (Teq) related?</br>
Answer: D ( F = 10 log10 (1 + Teq/T0))</br>
Explanation: Conceptual, Noise Factor = 1 + Teq/To and Noise figure = 10 log (Noise Factor). Substitute Noise 
Factor formula in Noise Figure expression to get the final expression.
 </p></br>

 <p>Question 8: For Noise Temperature 298K, Noise factor will be</br>
Answer: A (2)</br>
Explanation: Noise Factor = 1 + Teq/To, substitute Teq = 298k, since To is not mentioned, take it as 300k.</p></br>

 <p>Question 9: The expression of SNR in dB is expressed as </br>
Answer: C (10 log10 (S/N) )</br>
Explanation: Conceptual, (SNR)dB = 10 log (S/N)</p></br>

 <p>Question 10: What will be the noise figure for a system having noise temperature of 1000K? </br>
Answer: B ( 6.36dB )</br>
Explanation: Noise Factor = 1 + Teq/To, substitute Teq=1000k, since To not given, To=300k, Find Noise Fcator, 
Then use Noise Figure = 10 log (Noise Factor) to get the final output.

 </p></br>

</body>

</html>