
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-form">
        <h2>Applicant's Login</h2>
        <form method="POST"action="search.php" >
        <div class="input-field">
        <label for="course"><b>Choose Course :</b></label>
            <select name="course"id="height" >
                <option name="ugg">UG HONS</option>
                <option name="general">UG General</option>
                <option name="pgg">PG</option>
           
               <input type="ALPHANUMERIC" placeholder="Application number" name="app">
           </div>
           <div class="input-field">
             <input type="text" placeholder="Name" name="name">
           </div>
           <div class="input-field">
             <input type="date" placeholder="date of birth" name="dob">
           </div>
           <div class="input-field">
             <input type="email" placeholder="Email" name="email">
           </div>
           <button type="submit" name="search">SEARCH</button>

        </form>
    </div>
</body>
</html>
