<!DOCTYPE html>
<html lang="fr">
<title>Basic Panel Stresser</title>
<meta charset="UTF-8">

<form id="hubAttack" action="attackAPI.php" method="post">
    <center>
        <div class="hub">
            <br></br>
            <input type="password" id="key" name="key" placeholder="Key for use it" required><br></br>
            <input type="text" id="host" name="host" placeholder="Target Host" required><br></br>
            <input type="text" id="port" name="port" placeholder="Port (Ex: 80)" required><br></br>
            <input type="text" id="time" name="time" placeholder="Time of attack (Max: 300)" required><br></br>
            <select id="methods" name="methods">
                <optgroup label="Layer 3" disabled>
                    <option>ICMP</option>
                    <option>Ping of the death</option>
                </optgroup>            
                <optgroup label="Layer 4">
                    <option>UDP</option>
                    <option>SYN</option>
                    <option>DNS-AMP</option>
                    <option>NTP-AMP</option>
                </optgroup>
                <optgroup label="Layer 7">
                    <option>HTTP</option>
                    <option>CF-BYPASS</option>
                </optgroup>
            </select><br></br>            
            <button type="submit">Start Attack</button>
        </div>
    </center>
</form>

