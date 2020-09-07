<h2>Welcom at the Login pagina</h2>
<form  target=""  method="post">
    <div>
        <label for="Username">Gebruikersnaam :</label>
        <input type="text"  id="Username"  name="Username" value="<?php if (isset($_POST['Username'])) echo $_POST['Username']; ?>" required>
    </div><br>

    <div>
        <label for="Password">Wachtwoord :</label>
        <input type="text"  id="Password"  name="Password" value="<?php if (isset($_POST['Password'])) echo $_POST['Password']; ?>" required>
    </div><br>

    <div class="button">
        <button type="submit">Login</button>
<p>
    <div class="button">
        <button type="signup"formaction="singup.php" formnovalidate>Singup</button>
    </div>
<p>
    <div class="button">
        <button type="Restore Password" formaction="lostpsw.php"formnovalidate>Restore Password</button>
    </div>

  </form>
