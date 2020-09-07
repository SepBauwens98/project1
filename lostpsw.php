<H2>User recovery pagina</H2>
<form  target=""  method="post">
<div>
      <label  for="email">E-mail :</label>
          <input  type="email"  id="email"  name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required >
    </div><br>

    <div  class="button">
        <button  type="submit">Recover</button>
    </div>
</form>
