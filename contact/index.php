<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <div class="container">

        <form role="form" method="post">
            <label class="colstat" for="status">Status:</label>
            <div class="status" id="status">Please complete the form
                <?php require 'emailing.php'; ?>
            </div>

            <h1>Contact MaxShack</h1>

            <label class=" col1 compulse" for="firstname">First name:</label>
            <input class="inp1" type="text" id="firstname" name="firstname" maxlength="50">

            <label class="col2 compulse" for="surname">Surname:</label>
            <input class="inp2" type="text" id="surname" name="surname" value="Dunsby" maxlength="50">

            <label class="col1 compulse" for="company">Company:</label>
            <input class="inp1" type="text" id="company" name="company" value="IBM Corporation" maxlength="50">

            <label class="col2 compulse" for="email">eMail:</label>
            <input class="inp2" type="email" id="email" name="email" value="gdunsby@gmail.com" maxlength="50">

            <label class="col1 compulse" for="subject">Subject:</label>
            <input class="inp1" type="text" id="subject" name="subject" value="Determinations" maxlength="60">

            <label class="col1" for="sname">Message:</label>
            <textarea type="textarea" id="message" name="message" placeholder="Your message here" maxlength="6000" rows="5"></textarea>

            <button class="btn" type="submit" name="sendmail">Send</button>
            <button type="reset">Reset</button>
        </form>
    </div>


    <script src="js/index.js"></script>
</body>

</html>