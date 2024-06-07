<html>
    <title>Fleuren's Story Platform</title>
    <link>
        <link rel="stylesheet" href="styles.css"></link>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    </head>

    <body>
        <h3>Fleuren's Story Platform</h3>
            <div id="photo_container">
                <img id="sample" src="image_placeholder.jpg" height="350px" width="375px"/>
                <p id="photo_author"></p>
                <button id="randomize" onclick="randomizer()">Get a random photo</button>
            </div>

        <form id="main_screen" method="post" action="includes/submission.php">
        <div id="contents">
            <p id="label">Author Nickname</p>
            <input id="author_name" type="text" name="auth_name" placeholder="What's your name?" maxlength="30" required><br>
            <p id="label">Story</p>
            <textarea id="body_text" name="story_body" placeholder="Write something.." style="height:150px" maxlength="500" required></textarea><br>
            <button id="submit">Submit Entry</button>
        </div>
        </form>
        
    </body>
    <script src="script.js"></script>
    
    <footer>
        Project by Fleuren
    </footer>
    <footer id="buildVer"><i>demo build • b3310524 • <a href="features.html">See features</a></i>
    </footer>

</html>