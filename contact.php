<?php include './inc/header.php' ?>

<!--Page Specific Styles-->
<link rel="stylesheet" href="./css/contact.css">

</head>

<body>
    <?php include './inc/navbar.php' ?>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;

    require_once __DIR__ . '/vendor/autoload.php';

    $nameError = '';
    $emailError = '';
    $messageError = '';
    $sendingMessage = '';

    if (!empty($_POST)) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (empty($name)) {
            $nameError = 'Name is empty.';
        }

        if (empty($email)) {
            $emailError = 'Email is empty.';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Email is invalid';
        }

        if (empty($message)) {
            $messageError = 'Message is empty.';
        } else if (strlen($message) > 1000) {
            $messageError = 'Message too long.';
        }

        if (empty($nameError) && empty($emailError) && empty($messageError)) {
            $mail = new PHPMailer();

            // specify SMTP credentials

            $mail->isSMTP();
            // $mail->SMTPDebug  = 2;
            $mail->Host = '';
            $mail->Port = ;
            $mail->SMTPAuth = ;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'tls';
            $mail->AddReplyTo($email, $name);
            $mail->addAddress('');
            $mail->Subject = $name . ' sent you a message.';

            // Enable HTML if needed
            $mail->isHTML(true);
            $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
            $body = join('<br />', $bodyParagraphs);
            $mail->Body = $body;

            if ($mail->send()) {
                header('Location: thankyou.php');
                // $sendingMessage = 'Thank you, will be in touch with you shortly.';
            } else {
                $sendingMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
            }
        }
    }
    ?>

    <!--Page Specific Content Start-->
    <section>
        <div id="color"></div>
        <div id="background"></div>
        <div id="content">
            <h1>Contact Us</h1>
            <p id="direct-email">Direct Email:</p>
            <a href="mailto:contact@wedevelopstuff.com">
                <p>contact@wedevelopstuff.com</p>
            </a>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contact-form">
                <h3></h3>
                <h3><?php // echo $sendingMessage
                    ?></h3>
                <p><label>Full Name</label> <input onclick="nameValidator()" oninput="nameValidator()" onchange="nameValidator()" id="name-input" name="name" type="text" placeholder="Please enter your full name here." /></p>
                <p class="error-message" id="name-error"><?php echo $nameError; ?></p>
                <p><label>Email Address</label> <input onclick="emailValidator()" onchange="emailValidator()" id="email-input" name="email" type="text" placeholder="Please use your work email." /></p>
                <p class="error-message" id="email-error"><?php echo $emailError; ?></p>
                <p><label>Message</label> <textarea onclick="messageValidator()" oninput="messageValidator()" onchange="messageValidator()" id="message-input" name="message" placeholder="Max 1000 characters."></textarea> </p>
                <p id="character-count">0 / 1000</p>
                <p class="error-message" id="message-error"><?php echo $messageError; ?></p>
                <p><input onclick="submitValidator()" id="submit-button" type="submit" value="Send" /></p>

            </form>

        </div>

    </section>

    <!--Page Specific Content End-->

    <!-- Including Common Scripts -->
    <?php include './inc/scripts.php'; ?>
    <!-- Page-Specific Scripts  -->
    <script src="./js/validate.js"></script>
    <script src="./js/async-validator.js"></script>
</body>

<?php include './inc/footer.php' ?>