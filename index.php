<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>.container {background: #eee; margin: 0 auto; width: 100%; border: 1px solid black;}</style>
    </head>
    <body>
        <div class="container">
            <h1>PHP App B</h1>
            <p>This PHP app is running on the host &ldquo;<?php echo gethostname(); ?>&rdquo;</p>
            <p>PHP version <?php echo phpversion(); ?></p>
        </div>
    </body>
</html>
