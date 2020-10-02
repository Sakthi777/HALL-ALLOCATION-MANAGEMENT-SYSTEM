<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="summa.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>SEARCH</title>
    <style>

    </style>
</head>
<body>
 <form action="" method="POST"
 class="form" name="form" id="form" onsubmit="return check()">
 <div class="cont2">
        <div class="search">
            <h2 id="search">SEARCH</h2>
            <div id="meg" class="meg"></div>
            <label>
                <span>USERNAME</span>
                <input type="text" name="uname" id="uname" size="9" maxlenth="15" >
            </label>
            <label>
                <span>ID</span>
                <input type="text" name="id" id="id" >
            </label>
            <label>
                <span >DEPARTMENT</span>
                    <select class="select" id="dept" name="dept">
                    <option selected disabled value="">-select-</option>
                    <option value="BCA">BCA</option>
                    <option value="B.SC IT">B.sc IT</option>
                    <option value="B.SC CS">B.sc CS</option>
                </select>
                </label>
                <label>
                    <span>YEAR</span>
                        <select name="year" id="year" class="select">
                        <option selected disabled value="">-select-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </label>
               
            <input type="submit" class="submit" name="search" value="search">
<?php include_once('search_db.php') ?>
    
</div>
</div>
</form>
<script src="search.js"></script>
</body>
</html>
