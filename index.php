<?php
    // ارسال بيانات النموذج عبر البريد الإلكتروني
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $to = "aitidlsb@gmail.com";
        $subject = "رسالة من موقع الاتصال";
        $body = "اسم المرسل: $name\n\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
        mail($to, $subject, $body);
        echo "<p>تم إرسال رسالتك بنجاح، شكراً لتواصلك معنا.</p>";
    }
	// تحديد عنوان صفحة المشاريع
    if (isset($_POST["project_title"])) {
        $project_title = $_POST["project_title"];
        header("Location: /projects.php?title=$project_title");
        exit();
    }
	// استخراج عنوان صفحة المشروع من العنوان
    if (isset($_GET["title"])) {
        $project_title = $_GET["title"];
        echo "<h1>$project_title</h1>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
        /* تنسيق header */
header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
}

/* تنسيق section */
section {
	padding: 50px 0;
	text-align: center;
}

section h1, section h2 {
	margin-bottom: 20px;
}

section ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

section li {
	margin-bottom: 10px;
}

/* تنسيق النموذج */
form {
	display: inline-block;
	text-align: left;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
textarea {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border-radius: 3px;
}

input[type="submit"] {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #555;
}
    </style>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="#">الصفحة الرئيسية</a></li>
			<li><a href="#project">المشاريع</a></li>
			<li><a href="#contact">التواصل</a></li>
		</ul>
	</nav>
</header>
<section id="home">
	<h1 name="project_title">مرحباً بكم في موقعنا!</h1>
	<p>هذا الموقع يهدف إلى عرض مشاريعنا الحالية وتوفير وسيلة للتواصل معنا.</p>
</section>
<section id="project">
	<h2 name="title">مشاريعنا</h2>
	<ul>
		<li>مشروع 1</li>
		<li>مشروع 2</li>
		<li>مشروع 3</li>
	</ul>
</section>
<section id="contact">
	<h2>تواصل معنا</h2>
	<form action="" method="post">
		<label for="name">الاسم:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">البريد الإلكتروني:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="message">الرسالة:</label>
		<textarea id="message" name="message"></textarea><br><br>
		<input type="submit" value="إرسال">
	</form>
</section>
</body>
</html>
