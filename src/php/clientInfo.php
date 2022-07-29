<div class="clientInfo">
    <input type='text' name='clientName' class='client' placeholder='Name' required>
    <input type='text' name='surname' class='client' placeholder='Surname' required>
    <input type='text' name='email' class='client' placeholder='Email' required>
</div>  

 
<?php
$clientContents = [];
$clientContents[$name] = [
    "clientName" => $name,
    "surname" => $surname,
    "email" => $email,
    
];
file_put_contents("/MAMP/htdocs/onlineStore-FullStack/src/json/client.json", json_encode($clientContents, JSON_PRETTY_PRINT));
?>
                       
