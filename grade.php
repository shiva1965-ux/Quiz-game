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
      background-image:url("https://kaleidousercontent.com/removebg/designs/4621cf76-fb41-4177-bc33-f12a67816592/thumbnail_image/change-background-thumbnail.png");
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
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "B") { $totalCorrect++; }
            if ($answer9 == "C") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
            
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

<p>Question 1: Shot Noise occurs in _______</br>
Answer: C (Semi-Conductors)</br>
Explanation:  Conceptual. Shot noise occurs in Semi-Conductors. Eg. Diode, Transistors, etc.
  </p></br>

<p>Question 2: How are flicker and burst noise related to wavelength. (Hint: f α 1/λ)</br>
Answer: C (directly, directly^2)</br>
Explanation: Frequency is inversely proportional to wavelength. Therefore, Flicker noise which is inversely
proportional to f, is directly proportional to wavelength and burst noise which is inversely proportional
to f², is directly proportional to wavelength². </p></br>

<p>Question 3: Noise Current will be more in which case?</br>
Answer: A (Case i > Case ii)</br>
Explanation: Calculate Noise Current in both the cases using the expression. Compare the two values. </p></br>

<p>Question 4: Flicker Noise and Burst noise occurs due to</br>
Answer: D (Change in Frequency)</br>
Explanation: Flicker noise and Burst noise depend upon Frequency. Hence they are frequency dependent </p></br>

<p>Question 5: Flicker Noise is also known as ____________.</br>
Answer: B ( 1 over f noise)</br>
Explanation: Flicker noise is also called as 1 over f noise as it is directly proportional to 1/f. </p></br>


<p>Question 6: Flicker noise and Popcorn/Burst noise are inversely proportional to ________ and _________ respectively.</br>
Answer: A ( f, f^2)</br>
Explanation:Flicker noise is also known as 1 over f noise. Therefore Flicker Noise is inversely proportional to f. On
the other hand, Burst noise occurs at very low frequencies, therefore they are inversely proportional to
f².
 </p></br>

 <p>Question 7: A noise generator using diode is producing 15uV noise voltage in a receiver which has an input impedance of 75Ω. Bandwidth associated with it is 200KHz. Calculate current through the diode.</br>
Answer: A ( 113.137pA)</br>
Explanation: Flicker noise is also known as 1 over f noise. Therefore Flicker Noise is inversely proportional to f. On
the other hand, Burst noise occurs at very low frequencies, therefore they are inversely proportional to
f².
 </p></br>

 <p>Question 8: The point of difference between Excess Resistor noise and Thermal Noise is _________.</br>
Answer: B (that excess resistor noise depends upon frequency )</br>
Explanation: Thermal noise is calculated based on the obstruction produced by the atoms and Excess Resistor
Noise occurs due to the frequency of voltage flowing through it. Therefore, it is frequency dependent.
But Thermal noise is independent of frequency.
 </p></br>

 <p>Question 9: Shot Noise is caused due to ____________.</br>
Answer: C (electrons )</br>
Explanation: Shot noise deals with the noise current generated in the Semi-Conductors. Electrons are the ones
responsible for current generation. Hence, shot noise occurs due to electrons.

 </p></br>

 <p>Question 10: For a Certain Frequency,</br>
Answer: C ( Flicker Noise > Burst Noise )</br>
Explanation: Let’s take F = 2Hz. Flicker noise is inversely proportional to f, hence flicker noise=0.5, on the other
hand, burst noise is inversely proportional to f², hence, burst noise=0.25. Therefore, for any particular
frequency, flicker noise will always be more than the burst noise.

 </p></br>

</body>

</html>