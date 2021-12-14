<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM encargados WHERE id_encargado = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $name = $row['name_encargado'];
        }
    }

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $name = $_POST['name_encargado'];

        $sql = "UPDATE encargados SET name_encargado = '$name' WHERE id_encargado = $id";
        mysqli_query($conn, $sql);

        $_SESSION['message'] = 'Encargado actualizado';
        $_SESSION['message_type'] = 'warning';
        header("Location: encargados.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Editar encargado</title>
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="d-flex">
        <div class="min-vh-100 dashboard">
          <div class="d-flex flex-column align-items-start p-3">
            <a
              href="http://cbta39.com.mx"
              class="
                d-flex
                align-items-center
                ps-0
                p-2
                text-decoration-none
                section
              "
            >
              <img
                src="images/CBTA39.png"
                class="pe-2"
                alt="CBTa 39"
                width="60"
              />
              <p class="m-0">CBTa 39</p>
            </a>
            <a
              href="index.php"
              class="
                p-2
                text-decoration-none
                d-flex
                align-items-center
                my-2
                section
              "
            >
              <span class="fas fa-book fs-5 pe-2"></span>
              <p class="m-0">Libros</p>
            </a>
            <a
              href="encargados.php"
              class="
                p-2
                text-decoration-none
                d-flex
                align-items-center
                my-2
                section
              "
            >
              <span class="fas fa-chalkboard-teacher fs-5 pe-2"></span>
              <p class="m-0">Encargados</p>
            </a>
            <a
              href="alumnos.php"
              class="
                p-2
                text-decoration-none
                d-flex
                align-items-center
                my-2
                section
              "
            >
              <span class="fas fa-graduation-cap fs-5 pe-2"></span>
              <p class="m-0">Alumnos</p>
            </a>
          </div>
        </div>
        <section class="container-fluid p-0 w-100">
          <div class="d-flex flex-column py-4 px-5">
            <header
              class="
                d-flex
                align-items-center
                justify-content-center
                border-bottom
                pb-3
              "
            >
              <div class="d-flex align-items-center form-submit">
                <span class="fas fa-pen fs-4 pe-3"></span>
                <h1 class="m-0 fs-2">Editar encargado</h1>
              </div>
            </header>
          </div>
          <form
            action="edit_encargado.php?id=<?php echo $_GET['id']; ?>"
            method="POST"
            class="d-flex align-items-center justify-content-center mt-3 py-3"
          >
            <div class="d-flex flex-column border rounded p-4">
              <input
                name="name_encargado"
                type="text"
                value="<?php echo $name; ?>"
                placeholder="Actualiza el nombre del encargado"
                required
                class="
                  mb-4
                  border border-dark
                  rounded
                  form-input
                  p-2
                  search-navbar
                "
              />
              <input
                type="submit"
                name="update"
                value="Actualizar encargado"
                class="btn btn-primary py-2 rounded search-navbar"
              />
            </div>
          </form>
        </section>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
