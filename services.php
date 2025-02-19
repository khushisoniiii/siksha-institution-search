<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="mylogoof.png">
   <title>Siksha:Services</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap');

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1B3A57; 
            color: #ADD8E6;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #112D4E;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #ADD8E6;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            padding: 15px;
             background: #1B3A57; /* Updated list item background */
            border-radius: 5px;
            border: 2px solid #ADD8E6;
            box-shadow: 0 2px 4px black;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        li:hover {
            background-color: #136b89;
            border-color: #E0F7FA;
            color: #112D4E;
        }

        li a {
            text-decoration: none;
            color: #E0F7FA;
            font-weight: bold;
            flex-grow: 1;
        }

        li a:hover {
            color: black;
        }

        li i {
            font-size: 1.5rem;
            color: #00BFFF;
        }

        .navbar {
            background-color: #112D4E;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px 20px;
        }

        .header {
            font-size: 20px;
            color: #00BFFF;
            font-family: "Rubik Vinyl", serif;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 40px;
        }

        .nav-links a {
            text-decoration: none;
            color: #E0F7FA;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ADD8E6;
        }

        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
    <h4 class="header" style="color:#ADD8E6">Siksha</h4>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<div class="container">
        <h1>Our Services</h1>
        <ul>
            <li><i class="fas fa-home"></i><a href="#home-tuitions">Home Tuitions</a></li>
            <li><i class="fas fa-school"></i><a href="#coaching-institutes">Coaching Institutes</a></li>
            <li><i class="fas fa-book"></i><a href="#competitive-exams">Competitive Exam Institutes</a></li>
            <li><i class="fas fa-user-tie"></i><a href="#career-counsellors">Career Counsellors</a></li>
            <li><i class="fas fa-laptop"></i><a href="#online-tutorials">Online Tutorials</a></li>
            <li><i class="fas fa-flask"></i><a href="#iit-jee">IIT-JEE / IIT-JAM / NEET / GATE</a></li>
            <li><i class="fas fa-briefcase"></i><a href="#cca-ca-law-ias">CCA / CA / LAW / IAS</a></li>
        </ul>

        <div class="description" id="home-tuitions">
            <h2>Home Tuitions</h2>
            <p>Our home tuition services provide personalized, one-on-one learning experiences. Tutors come to your home, allowing students to learn in a comfortable and familiar environment. Lessons are customized to the student's learning pace and style, ensuring effective understanding of concepts. We cover all subjects and levels, from school to university education.</p>
        </div>

        <div class="description" id="coaching-institutes">
            <h2>Coaching Institutes</h2>
            <p>We partner with leading coaching institutes that offer comprehensive training programs. These institutes are equipped with experienced faculty, structured lesson plans, and regular assessments. Their focus is to help students achieve academic excellence and competitive exam success through a systematic approach.</p>
        </div>

        <div class="description" id="competitive-exams">
            <h2>Competitive Exam Institutes</h2>
            <p>Our competitive exam institutes specialize in preparing students for various national and international exams. They provide expertly designed study materials, mock tests, and personalized mentoring. The goal is to enhance the student's confidence and performance in exams such as UPSC, SSC, and banking exams.</p>
        </div>

        <div class="description" id="career-counsellors">
            <h2>Career Counsellors</h2>
            <p>Career counsellors guide individuals in choosing the right career paths based on their interests, skills, and market trends. Through personalized sessions, they help identify strengths, set career goals, and explore educational or professional opportunities. This service is ideal for students and professionals seeking clarity and direction.</p>
        </div>

        <div class="description" id="online-tutorials">
            <h2>Online Tutorials</h2>
            <p>Our online tutorials offer a flexible and accessible way to learn from anywhere. They include live interactive sessions, recorded lectures, and engaging learning materials. Students can learn at their own pace, making it convenient for school, college, or professional studies.</p>
        </div>

        <div class="description" id="iit-jee">
            <h2>IIT-JEE / IIT-JAM / NEET / GATE</h2>
            <p>Our preparation programs for IIT-JEE, IIT-JAM, NEET, and GATE are designed for students aiming for top engineering, medical, and postgraduate institutes. The curriculum includes in-depth subject coverage, problem-solving sessions, and regular practice tests to ensure success.</p>
        </div>

        <div class="description" id="cca-ca-law-ias">
            <h2>CCA / CA / LAW / IAS</h2>
            <p>We provide specialized training for CCA, CA, LAW, and IAS aspirants. The programs include expert mentorship, comprehensive study plans, and exam-focused preparation. These services are tailored to meet the unique requirements of each professional field, ensuring thorough preparation and confidence.</p>
        </div>
    </div>
   
</body>
</html>