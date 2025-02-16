<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نفقة - الصفحة الرئيسية</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* White background */
            color: black; /* Black text color for better readability */
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: white; /* White header */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow for depth */
        }
        .header img {
            height: 50px; /* Adjust logo height */
        }
        .hero {
            background-color: rgb(1, 155, 1); /* Darker green for hero section */
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .about {
            padding: 50px 0;
            background-color: rgb(3, 137, 3); /* Keep the same dark green for consistency */
        }
    </style>
</head>
<body>

    <header class="header">
        <div>
            <img src="assets/img/brand/logo.png" alt="Nafakah Logo"> <!-- Logo path updated -->
        </div>
        <div>
            <a  href="{{ route('signin') }}" class="btn btn-light">تسجيل الدخول</a> <!-- "Login" in Arabic -->
        </div>
    </header>

    <div class="hero">
        <h1>مرحبًا بكم في نفقة</h1>
        <p>مصدر الدعم المالي والموارد.</p>
        <a  href="{{ route('signin') }}" class="btn btn-light">ابدأ الآن</a> <!-- "Get Started" in Arabic -->
    </div>

    <div class="container about" id="about">
        <h2 class="text-center">حول نفقة</h2>
        <p class="text-center">نفقة هو منصة تهدف إلى تقديم الدعم المالي والمساعدة للأفراد والعائلات في حاجة. نحن هنا لمساعدتك في الحصول على الموارد التي تحتاجها.</p>
    </div>

    <footer class="text-center py-4">
        <p>&copy; {{ date('Y') }} نفقة. جميع الحقوق محفوظة.</p>
    </footer>

</body>
</html>
