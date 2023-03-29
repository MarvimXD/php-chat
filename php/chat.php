<?php
require_once('connection.php');

class Chat {

    public function send($pdo) {

        $msg = htmlspecialchars(trim($_POST['msg']), ENT_QUOTES, 'UTF-8');
        $sql = $pdo->prepare("INSERT INTO messages (message) VALUES ('$msg')");            //CHANGE THE DATABASE TABLE HERE
        $sql->execute();
        $pdo = null;
        

    }

    public function select($pdo) {

        $sql = $pdo->prepare("SELECT * FROM messages ORDER BY id DESC");
        $sql->execute();


        foreach($sql->fetchAll() as $v) {

            if($v['id'] % 2 == 0) {
                echo '<div class="chat-ppl-msg">
                    <div id="chat-ppl-msg-division-id-img" class="chat-ppl-msg-division">
                        <img src="images/ppl.png" width="50px" height="50px" style="border-radius:50%;" alt="">
                    </div>
                    <div id="chat-ppl-msg-division-id-msg" class="chat-ppl-msg-division">
                        '.$v['message'].'
                    </div>
                </div>';
            } else {
                echo '<div class="chat-ppl-msg">
                <div id="chat-ppl-msg-division-id-img" class="chat-ppl-msg-division-right">
                    <img src="images/ppl.png" width="50px" height="50px" style="border-radius:50%;" alt="">
                </div>
                <div id="chat-ppl-msg-division-id-msg" class="chat-ppl-msg-division-right">
                    '.$v['message'].'
                </div>
            </div>';
            }

            

                
        }

        $pdo = null;

    }

}

// IF THERE IS NOT A PARAMETER
if(!$_GET['action']) {
    // header('Location: ');
    die();
}

$action = htmlspecialchars(trim($_GET['action']), ENT_QUOTES, 'UTF-8');
$chat = new Chat();

if($action == 'send') {
    $chat->send($pdo);
} else if($action == 'select') {
    $chat->select($pdo);
}