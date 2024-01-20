<?php
    exec('php ../bin/chat-server.php',$out,$res);
    echo json_encode($out);