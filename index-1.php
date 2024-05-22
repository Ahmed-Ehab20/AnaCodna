<html>
<head>
<title>Python Quiz</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Python Quiz</h1>
<p>Please fill the details and answers the all questions-</p>
<form action="score.php" method="post">
<h3>Ques1 : Which of the following blocks will always be executed whether an exception is encountered or not in a program? </h3>
<div class="form-group"> 
<ol>
<li>
<input type="radio" name="q1" value="1" />Finally
</li>
<li>
<input type="radio" name="q1" value="2" />except
</li>
<li>
<input type="radio" name="q1" value="3" />try
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques2 : Which of the following functions converts date to corresponding time in Python</h3>
<ol>
<li>
<input type="radio" name="q2" value="1" />strptime()
</li>
<li>
<input type="radio" name="q2" value="2" />strftime()
</li>
<li>
<input type="radio" name="q2" value="3" />Both
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques3 : Which of the following loops isn't supported in Python </h3>
<ol>
<li>
<input type="radio" name="q3" value="1" />for 
</li>
<li>
<input type="radio" name="q3" value="2" />do-while
</li>
<li>
<input type="radio" name="q3" value="3" />while
</li>
</ol>
</div>
<div class="form-group"> 
<h3>Ques4 : Which of the following isn't a part of Python</h3>
<ol>
<li>
<input type="radio" name="q4" value="1" />Pointers
</li>
<li>
<input type="radio" name="q4" value="2" />Loops
</li>
<li>
<input type="radio" name="q4" value="3" />Dynamic Typing
</li>
</ol>
</div>
<br/>
<div class="form-group">
<h3>Ques5 :What is the Maximum length of a Python identifier? </h3>
<ol>
<li>
<input type="radio" name="q5" value="1" />32
</li>
<li>
<input type="radio" name="q5" value="2" />16
</li>
<li>
<input type="radio" name="q5" value="3" />No length is specified
</li>
</ol>
</div>
<br/>
<div class="form-group">
<button type="submit" value="Submit" name="submit" class="btn btn-primary" onclick="result()">
Submit
</button>
</div>
<div class="form-group">
<p id="result"></p>
</div>
</form>
</div>

<script>
    function result()
    {
        var xhr= new XMLHttpRequest();
        var q1= document.getElementById("q1").value;
        var q2= document.getElementById("q2").value;
        var q3= document.getElementById("q3").value;
        var q4= document.getElementById("q4").value;
        var q5= document.getElementById("q5").value;
        xhr.onreadystatechange=function()
        {
            if(xhr.readystate==4 && xhr.status==200)
            {
                docuemnt.getElementById("result").innerHTML=xhr.responseText;
            }
        }
        xhr.open("POST","score.php",true);
        xhr.send(null);
    }
    </script>
</body>
</html>