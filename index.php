<?php include('php/info.php') ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME . " - " . APP_VERSION ?></title>

    <!-- CHAT CSS ARCHIVE  -->
    <link rel="stylesheet" href="css/chatStyle.css">


</head>

<body onload="chat.select()">



    <!-- ################ -->
    <!-- CHAT STARTS HERE -->
    <!-- ################ -->


    <div class="chat-container">
        <!-- CHAT MENU OPTIONS  -->
        <div class="chat-menu-options">
            <div id="chat-menu-option-id-close-icon" class="chat-menu-option">
                <!-- IF YOU WANT TO ADD ANY ICON, PUT IT HERE  -->
                <img src="images/arrow.png" width="10px" height="10px" alt="">
            </div>
            <div id="chat-menu-option-id-text" class="chat-menu-option">
                <h4><?= APP_NAME . " - " . APP_VERSION ?></h4>
            </div>
        </div>
        <!-- CHAT MENU OPTIONS  -->

        <!-- CHAT MESSAGES  -->
        <div id="chat-messages">

            


        </div><br>

        <form id="form-chat">
            <!-- INPUT MESSAGES  -->
            <div id="chat-messages-input-text" class="chat-messages-input-field">
                <input type="text" id="message" placeholder="Type your message here...">

            </div>
            <div id="chat-messages-input-submit" class="chat-messages-input-field">
                <input type="submit" id="btnSubmit" value="Send">

            </div>
        </form>
    </div>

    <!-- JQUERY -->
    <script src="js/jquery.js"></script>
    <!-- CHAT SCRIPT ARCHIVE  -->
    <script src="js/chatScript.js"></script>

    <!-- ################ -->
    <!--  CHAT ENDS HERE  -->
    <!-- ################ -->




</body>

</html>