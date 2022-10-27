</main>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-0 bg-light border-top">
    <p class="col-md-4 px-4 mb-0 mr-2 text-muted">@Summoner's Greed</p>
    <a href="home/all" class="col-md-4 d-flex align-items-center justify-content-center mb-2 mb-md-0 me-md-auto link-dark text-decoration-none"> <button type="button" class="btn btn-outline-dark ">Ver invocaciones</button></a>
    <ul class="nav col-md-4 justify-content-end">

      <li class="nav-item"><a href="home" class="nav-link px-4 text-muted">Home</a></li>
      {if !isset($smarty.session.USER_ID)}
        <li class="nav-item">
            <a  class="nav-link px-4 text-muted"  href="login">Log in</a>
        </li>
        {else}
        <li class="nav-item">
          <a class="nav-link px-4 text-muted" href="logout">Log out</a>
        </li>
      {/if}
      {if isset($smarty.session.USER_ID)}
        <li class="nav-item">
          <a class="nav-link px-4 text-muted" href="agregar">Agregar</a>
        </li>
      {/if}
    </ul>
  </footer>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>