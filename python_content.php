
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>python article</title>
    <link rel="stylesheet" href="content.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/cascadia-code" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="ide/compiler/css/style.css" />

</head>
<body>

<!--- navbar-->


<?php include 'nav.php';?>

<!--- -->
<section class="drop">

<div class="dropdown">
<button class="dropbtn">Level 1</button>
<div class="dropdown-content">
<a id="level1.1" onclick="getContent('level1.1')">Introduction</a>
<a id="level1.2" onclick="getContent('level1.2')">Installation</a>
<a id="level1.3" onclick="getContent('level1.3')">Data Types</a>
<a id="level1.4" onclick="getContent('level1.4')">Operators</a>
<a href="TEST/pyQuizepython.php">Test yourself</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">Level 2</button>
<div class="dropdown-content">
<a id="level2.1" onclick="getContent('level2.1')">Simple Calculator</a>
<a id="level2.2" onclick="getContent('level2.2')">Taking Input</a>
<a id="level2.3" onclick="getContent('level2.3')">Simple calculator v2</a>
<a id="level2.4" onclick="getContent('level2.4')">Condition statments</a>
<a href="TEST/pyQuize2python.php">Test yourself</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">Level 3</button>
<div class="dropdown-content">
<a id="level3.1" onclick="getContent('level3.1')">Conditional Statements Practice</a>
<a id="level3.2" onclick="getContent('level3.2')">Loops</a>
<a id="level3.3" onclick="getContent('level3.3')">Loop Practice</a>
<a id="level3.4" onclick="getContent('level3.4')">Lists and Dictionaries</a>
<a href="TEST/pyQuize3python.php">Test yourself</a>
</div>
</div>
</section>

    
<script src="./main.js"></script>


<section class="content">
    <div id="content">
        <!-- Content will be dynamically updated here -->
    </div>
    <div id="navigation">
    <button id="previous"  class="btn btn-primary" disabled>Previous</button>
    <button id="next"  class="btn btn-primary">Next</button>
</div>

    <script>
 

        var contentArray = [];
        if(localStorage.getItem("currentContentIndex")!=null){
       var currentContentIndex=localStorage.getItem("currentContentIndex");
       getContent(currentContentIndex);
}
else{
    var currentContentIndex=0;
    getContent("level1.1");
}
    function getContent(id) {
    // Determine the correct index in the content array based on the button ID
   // var index;
   
    switch(id) {
        case "level1.1":
            currentContentIndex = 0;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level1.2":
            currentContentIndex = 1;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level1.3":
            currentContentIndex = 2;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level1.4":
            currentContentIndex = 3;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level2.1":
            currentContentIndex = 4;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level2.2":
            currentContentIndex = 5;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level2.3":
            currentContentIndex = 6;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level2.4":
            currentContentIndex = 7;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level3.1":
            currentContentIndex = 8;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level3.2":
            currentContentIndex = 9;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level3.3":
            currentContentIndex = 10;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
        case "level3.4":
            currentContentIndex = 11;
            localStorage.setItem("currentContentIndex", currentContentIndex);

            break;
            default:
            currentContentIndex=id;
            localStorage.setItem("currentContentIndex", currentContentIndex);
   
    }
        // Retrieve content from database using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "getpython.php");
        xhr.onload = function() {
            if (xhr.status === 200) {
                contentArray = JSON.parse(xhr.responseText);
                if(localStorage.getItem("currentContentIndex")!=null){
       var currentContentIndex=localStorage.getItem("currentContentIndex");
       displayContent(currentContentIndex);
}
else{
    var currentContentIndex=0;
    displayContent(currentContentIndex);
}
            }
        };
        xhr.send();
    }
        // Display the content on the page
        function displayContent(index) {
    var content = `
        <h1>${contentArray[index].header}</h1>
        <br> <br>
        <h2>${contentArray[index].header1}</h2>
        ${contentArray[index].intro ? `<p>${contentArray[index].intro}</p>` : ''}
        <br> <br>
        ${contentArray[index].header2 ? `<h2>${contentArray[index].header2}</h2>` : ''}
        ${contentArray[index].paragraph2 ? `<p>${contentArray[index].paragraph2}</p>` : ''}
        <br> <br>
        ${contentArray[index].header3 ? `<h2>${contentArray[index].header3}</h2>` : ''}
        ${contentArray[index].paragraph3 ? `<p>${contentArray[index].paragraph3}</p>` : ''}
        <br> <br>
        ${contentArray[index].header4 ? `<h2>${contentArray[index].header4}</h2>` : ''}
        ${contentArray[index].paragraph4 ? `<p>${contentArray[index].paragraph4}</p>` : ''}
        <br> <br>
        ${contentArray[index].header5 ? `<h2>${contentArray[index].header5}</h2>` : ''}
        ${contentArray[index].paragraph5 ? `<p>${contentArray[index].paragraph5}</p>` : ''}
        <br> <br>
        ${contentArray[index].header6 ? `<h2>${contentArray[index].header6}</h2>` : ''}
        ${contentArray[index].paragraph6 ? `<p>${contentArray[index].paragraph6}</p>` : ''}
        <br> <br>
        ${contentArray[index].header7 ? `<h2>${contentArray[index].header7}</h2>` : ''}
        ${contentArray[index].paragraph7 ? `<p>${contentArray[index].paragraph7}</p>` : ''}
        <br> <br>
        ${contentArray[index].header9 ? `<h2>${contentArray[index].header9}</h2>` : ''}
        ${contentArray[index].paragraph9 ? `<p>${contentArray[index].paragraph9}</p>` : ''}
        <br> <br>
        ${contentArray[index].header10 ? `<h2>${contentArray[index].header10}</h2>` : ''}
        ${contentArray[index].paragraph10 ? `<p>${contentArray[index].paragraph10}</p>` : ''}

        <section class="ide-box ">
                <div class="editor" id="editor" ><textarea id="textareaCode">${contentArray[index].code}
                </textarea></div>

                <button class="btn-success" onclick="executeCode()">▶ Run </button>

                <div class="output-box">
                    <h3 class="output-header">Output :</h3>
                    <div ><pre class="output"></pre></div>
                </div>
            </section>
    `;
    document.getElementById("content").innerHTML = content;
}

        
    
        // Next button click handler
        document.getElementById("next").addEventListener("click", function() {
            if (currentContentIndex < contentArray.length - 1) {
                currentContentIndex++;
                if(currentContentIndex==4){
                    window.location.assign("TEST/pyQuizepython.php");
                }
                else if(currentContentIndex==8){
                    window.location.assign("TEST/pyQuize2python.php");
                }
                else if(currentContentIndex==12){
                    window.location.assign("TEST/pyQuize3python.php");
                }
                localStorage.setItem("currentContentIndex", currentContentIndex);
                
                displayContent(currentContentIndex);
            }
            if (currentContentIndex == contentArray.length - 1) {
                this.disabled = true;
            }
            document.getElementById("previous").disabled = false;
        });

        // Previous button click handler
        document.getElementById("previous").addEventListener("click", function() {
            if (currentContentIndex > 0) {
                currentContentIndex--;
                localStorage.setItem("currentContentIndex", currentContentIndex);
                displayContent(currentContentIndex);
            }
            if (currentContentIndex == 0) {
                this.disabled = true;
            }
            document.getElementById("next").disabled = false;
        });

    </script>


</section>




<!--insert comments-->

<section class ="a">
<center><h1>Your comment give us more than what you think!</h1></center><bR>
<div class="comment-box">

  <h3>Leave a Comment</h3>
  <form action="addcomment.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" required></textarea>
    </div>
    
    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</section>



<!--display commments -->



<section class="content1">
<div class="icon">
<i class="fa-solid fa-users-line" style="color: #0066cc;"></i>
</div>
<h1><center>Comments</center></h1>
<br>
<div class="comment-section">
<div class="comment">


<?php
include 'config.php';
$sql = "SELECT name,comment,com_date FROM comment ORDER BY id DESC LIMIT 5  ";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

echo "<div class='comment1'>";

echo    "<div class='user'>".$row["name"]."</div>".
        "<div class='message'>".$row["comment"]."</div>".
        "<div class='message'>".$row["com_date"]."</div><hr>";
    }
    echo "</div>";
} else {
    echo "0 results";
}
$con->close();
?>
</div>
</div>
</section>

    <!----------------------- ide ------------------>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="ide/compiler/js/lib/ace.js"></script>
    <script src="ide/compiler/js/lib/theme-github.js"></script>
    <script>
        let editor;

        window.onload = function() {
            editor = ace.edit("editor");
            editor.setTheme("ace/theme/github");
            editor.session.setMode("ace/mode/python");
        }

        function executeCode() {
            $.ajax({
                url: "/anacodna/ide/garbage/pyCompiler.php",
                method: "POST",
                data: {
                    language: "python",
                    code: editor.getSession().getValue()
                },
                success: function(response) {
                    $(".output").text(response)
                }
            })
        }
    </script>

    <!----------------------- ide ------------------>

<?php include 'footer.php';?>
    
</body>
</html>