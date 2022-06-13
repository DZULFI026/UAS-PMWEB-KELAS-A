<?php 
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    if(isset($_POST["submit"])) {
        if(uploadGambar() > 0) {
            echo "
            <script> 
                alert('Gambar berhasil diunggah!'); 
                document.location.href = 'index.php';
            </script>";
        }
        else {
            echo "
            <script> 
                alert('Gambar gagal diunggah!'); 
                document.location.href = 'index.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
</head>

<body>

  <a href="https://drive.google.com/file/d/1iTOeTn8rUikALFNgLM3JgOK-e_tQcgAh/view?usp=sharing"
    target="_blank"><button>click here for our team</button></a>
  <a href="https://drive.google.com/file/d/1SJ2CoAQWqpsekGEdHX8zhS7kIPyoxfzb/view?usp=sharing"
    target="_blank"><button>click here for demo apps </button></a>

        <button class="buttons" id="btn-logout" name="log-out" onclick="location.href='logout.php'">Log out</button>
</body>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List App</title>
  <link rel="stylesheet" href="mystyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
  <h1><span class="heading">TODO</span> List</h1>
  <div class="input_div">
    <input type="text" class="input" placeholder="Apa yang akan Anda Kerjakan...">
    <button class="addButton"><i class="fas fa-plus"></i></button>
  </div>

  <div class="container">

  </div>
  <script type="text/javascript" src="main.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
      <link rel="stylesheet" href="style.css">
</body>
</html>