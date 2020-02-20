<!doctype html>
  <!--navbar with buttons and title-->
  <nav class="navbar navbar-light d-flex form-inline flex-row justify-content-around" style="background-color: #0073e6;">
    <div>
    <a class="navbar-brand mr-5 text-white" href="#todas.php">Titulofdsfsddasdsadsadasdsadasdaasdaasddds</a>
    </div>
    <div>
        <button class="btn btn-outline-light ml-5" type="button" data-toggle="modal" data-target="#confessionModal">Envfen</button>
  </nav>

  <!-- bar under navbar, with the options-->
  <div class="d-flex flex-row bd-highlight mb- justify-content-around">
      <div class="p-2 bd-highlight">
        <form  method="post" action='todas.php'>
          <button class="btn btn-link text-body" type="submit" >Todas</button> 
        </form>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-link text-body" type="button" data-toggle="modal" data-target="#paises_modal">Endasvfen</button>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-link text-body" type="button" data-toggle="modal" data-target="#universidades_modal" >Por universidad</button>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-link text-body" type="button">TOP</button>
      </div>
  </div>
</html>