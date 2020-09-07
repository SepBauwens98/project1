<h2>Signup Pagina</h2>
<form  target=""  method="post">
    <div>
      <label  for="firstname">Voornaam :</label>
      <input  type="text"  id="firstname"  name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" required>
    </div><br>

    <div>
        <label  for="lastname">Tussenvoegsel :</label>
        <input  type="text"  id="lastname"  name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
    </div><br>

    <div>
        <label  for="lastname">Achternaam :</label>
        <input  type="text"  id="lastname"  name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" required>
    </div><br>

    <div>
      <label  for="email">E-mail :</label>
        <input  type="email"  id="email"  name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required >
    </div><br>

    <div>
        <label for="phone">Telefoon nummer :</label>
        <input type="tel" id="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" required >
    </div><br>

    <div>
        <label for="username">Gebruikersnaam :</label>
        <input type="tel" id="username" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required >
    </div><br>

    <div>
        <label for="password">Wachtwoord :</label>
        <input type="tel" id="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" required >
    </div><br>

    <div>
        <label for="passwordcheck">Wachtwoord opnieuw :</label>
        <input type="tel" id="passwordcheck" name="passwordcheck" value="<?php if (isset($_POST['passwordcheck'])) echo $_POST['passwordcheck']; ?>" required >
    </div><br>

    <div  class="button">
      <button  type="submit">Signup</button>
    </div>

  </form>
