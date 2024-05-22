# AnaCodna Website to Learn Programming
#### Video Demo:  <https://youtu.be/Yf9_4RRgyu0>
#### Description:
The point of the website is first for learning purposes and helping me understand the concepts of making a website from scratch
and secondly to tackle one of the problems my friends at college face which is learning programming from the perspective of a non english
speaker as it may be a bit hard for non english speakers to get acustomed to programming.
#### Objective and Aim
The aim of the website is to target junior programmers and those who want to get into programming. Using a friendly user interface which isn't too flashy
Junior programmers always try to search for tutorials on many websites, and most websites may confuse the user with the amount of information provided as it may be overwhelming. We aim to make the information provided easier through making the least amount of information for them to get ready for the more advanced levels. Also, make the UI more simple and easier for the user to make learning easier.  So, we support programmers with huge knowledge and big coding tricks.
#### Languages Utilized:
PHP
HTML
CSS
JavaScript
MySQL Database
AJAX
JQuery
#### Features:
1- Register as a Student or Teacher each with its own functionalites
2- Each avaliable programming language _(C,C++,Python)_ has 3 levels each level represents the level of difficulty ending with a quiz starting from beginner level _level 1_ each
3- Community forum which allows users to ask questions and reply to each other
4- Ability to see a list of registered teachers on the website and request to view their learning material _as student_ and in the event that a teacher approves the request student will be able to view the teacher's content
5- Similarly the teacher will be able to upload any type of file to their page
6- Provided IDE in each level of each programming language
7- Ability to comment on each level or lesson
#### File Explaination
We have debated using python instead of PHP but decided on PHP as its a new language which i wanted to explore and also speed was a big factor for me as PHP was faster
and is easy to use especially in small projects like this
Also for compatiability and synergy i chose MySQL as my Database program as learning a new db takes a long time to get used to the queries
-- Starting off with the database, simple database for registered users containing their id, username, email, password_(Hashed)_, their quiz's grades _(for display on the profile page)_,type_(admin,student,teacher)_, and the id of the teacher they requested to see their content if they requested
-- As well as having a database for the content of the lessons that are presented in each of the levels which come in handy when navigating through the other levels using AJAX which retrieves the content from the database without the need to refresh the page in the specific quiz file for the chosen language _(for ex: PyQuiz.php)
-- For the forum this code sets up a timer to periodically load data from the server, allows users to add comments and reply to existing comments, and updates the displayed data without requiring a full page reload using AJAX
-- For the Compiler this code sets up an HTML page with a Python code editor,taking its starting code from the database which will change with the change of the level or lesson or programming language and supports the three avaliable languages including _(C,C++,Python) allowing users to write and execute Python code directly in the browser. The code execution is handled by making an AJAX request to a server-side PHP script.
-- For the exam page the HTML code defines the structure, content, and behavior of the web page for the Python quiz. It acts as a multiple choice question with each question containing 3 choices after the user click the submit button he is greeted with his grade and if he failed to score less than 50% the quiz doesn't count. The user is welcome to try the quiz over and over even after he/she passed to get a better grade. The Grade gets transferred to the user's grade column in the database which from their can be displayed on the user's profile page
