


// CHAT CLASS 
class Chat {
    constructor() {
        this.send();
    }

    send() {
        const self = this;
        $('#form-chat').submit(function(e) {
            e.preventDefault();

            let msg = $('#message').val();

            $.ajax({
                url: './php/chat.php?action=send', // CHANGE THIS PATH IF PHP ARCHIVE IS IN ANOTHER FOLDER
                method: 'POST',
                data: {msg: msg},
                dataType: 'json'
            });

            $('#message').val('');
            self.select();

        });
    }

    select() {
        const self = this;
        $.ajax({
            url: './php/chat.php?action=select', // CHANGE THIS PATH IF PHP ARCHIVE IS IN ANOTHER FOLDER
            success: function(result) {
                $('#chat-messages').html(result);

                // KEEP SCROLL DOWN 
                // var chatMessages = document.getElementById('chat-messages');
                // chatMessages.scrollTop = chatMessages.scrollHeight;
                // $('#chat-messages').scrollTop($('#chat-messages').prop('scrollHeight'));

                setTimeout(self.select(), 1000);
            }
        });
    }


}


let chat = new Chat();