<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Live Chat</h1>
    <div id="chat-box">
        <!-- Chat messages will appear here -->
    </div>
    
    <textarea id="chat-message" placeholder="Type your message..."></textarea>
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            let message = document.getElementById('chat-message').value;
            if (message.trim() !== "") {
                let chatBox = document.getElementById('chat-box');
                chatBox.innerHTML += `<p><strong>You:</strong> ${message}</p>`;
                document.getElementById('chat-message').value = "";
                
                // Simulating a response from the server
                setTimeout(() => {
                    chatBox.innerHTML += `<p><strong>Support:</strong> Thank you for reaching out!</p>`;
                    chatBox.scrollTop = chatBox.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
