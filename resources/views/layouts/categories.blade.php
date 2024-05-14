<!-- resources/views/frontend/layouts/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .contact {
        background-color: #f4f4f4;
        padding: 50px 0;
        text-align: center;
    }

    .contact form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }

    button:hover {
        background-color: #555;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    footer p {
        margin: 0;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Contact Us</h1>
</div>
<section class="contact">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Fill out the form below to get in touch with us.</p>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>


<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();
        // Code to send form data to server or perform any other action
        alert('Your message has been sent! We will get back to you soon.');
        document.getElementById('contactForm').reset();
    });
</script>
</body>
</html>

