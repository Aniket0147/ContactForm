<!DOCTYPE html>
<html>
    <head>
        <!--Refresh document every 30 seconds--> 
        <meta http-equiv="refresh" content="30">
        <!--Setting the viewport to make your website look good on all devices-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo</title>
        <style>
             form{
            Font: Georgia;
            text-align: center;
        }    
        .subButton {
            color: rgb(255, 255, 255); 
            font-size: 13px;
            line-height: 13px;
            padding: 3px; 
            border-radius: 3px;
            text-decoration: none; 
            background-image: linear-gradient(to right, rgb(28, 110, 164) 0%, rgb(35, 136, 203) 61%, rgb(20, 78, 117) 100%); 
            box-shadow: rgb(0, 0, 0) 5px 5px 15px 5px; border: 2px solid rgb(28, 110, 164); 
            display: inline-block;
        }
        .myButton:hover {
            background: #1C6EA4; }
        .myButton:active {
            background: #144E75; }    
        </style>
    </head>
    <body>
    <form action="display.php" method="post">
        Name:   <input name="name" type="text" /> <br><br>  
        Email:  <input name="email" type="email"/> <br><br>
        Issue:  <select name="issue">
        <option  value="Query">Query</option>
        <option value="Feedback">Feedback</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
        </select><br><br>
        
        Comment:  <textarea cols="20" name="comments" rows="5"></textarea><br><br>
        <input type="submit" value="Submit" class="subButton"/>
        </form>
    </body>
</html>