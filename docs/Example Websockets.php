<script type="text/javascript">
    $('#chat').submit(function(evt){
        evt.preventDefault();
        send({'action':'chat', 'text':$('[name=text]').val()});
    });
    $('#login').submit(function(evt){
        evt.preventDefault();
        send({'action':'login', 'username':$('[name=username]').val()});
        $('#chat').show();
        $('#login').hide();
    });
</script>


<?php

Class WebsocketChat {

    public $text = '';
    public $timestamp = 0;
    public $username = '';
    private $messages = array();

    public function __construct($username, $text, $timestamp) {
        $this->text = $text;
        $this->username = $username;
        $this->timestamp = $timestamp;
    }

    public function process($user, $msg, $server) {

        $msg = json_decode($msg);

        if ($msg->action == 'login') {
            $user->data['username'] = filter_var($msg->username, FILTER_SANITIZE_STRING);

            $max = 5;
            if (count($this->messages) < 5)
                $max = count($this->messages);

            // on login send last five chat messages
            for ($i = count($this->messages) - $max; $i < count($this->messages); $i++) {
                $server->send($user->socket, (string) $this->messages[$i]);
            }
        }

        if ($msg->action == 'chat') {
            $text = filter_var($msg->text, FILTER_SANITIZE_STRING);
            $lastMessage = new WebsocketChatMessage($user->data['username'], $text, time());

            $user->data['message'][] = $this->messages[] = $lastMessage;

            foreach ($server->getUsers() as $user) {
                $server->send($user->socket, (string) $lastMessage);
            }
        }
    }
    
    
    public function __toString() {
        return sprintf('%s %s: %s', strftime('%H:%M', $this->timestamp), $this->username, $this->text);
    }

}
// test
$chat = new WebsocketChat();
// new WebSocketServer( socket address, socket port, callback function )
$webSocket = new WebSocketServer("84.38.67.247", 8081, array($chat, 'process'));
$webSocket->run();
?>
