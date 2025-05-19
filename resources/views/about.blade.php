<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelompok 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
    <script src="script.js"></script>
</head>
<body>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kelompok 6</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- List of Cards -->
    <div class="container mt-4">
        <ul>
            <!-- Card 1 -->
            <li>
                <h2><?php echo $name01; ?></h2>
                <p><?php echo $nim01; ?></p>
                <p><?php echo $email01; ?></p>
                <img src="img/<?php echo $img; ?>" alt="photo Kelompok" />
            </li>

            <!-- Card 2 -->
            <li>
                <h2><?php echo $name02; ?></h2>
                <p><?php echo $nim02; ?></p>
                <p><?php echo $email02; ?></p>
                <img src="img/<?php echo $img; ?>" alt="photo Kelompok" />
            </li>

            <!-- Card 3 -->
            <li>
                <h2><?php echo $name03; ?></h2>
                <p><?php echo $nim03; ?></p>
                <p><?php echo $email03; ?></p>
                <img src="img/<?php echo $img; ?>" alt="photo Kelompok" />
            </li>

            <!-- Card 4 -->
            <li>
                <h2><?php echo $name04; ?></h2>
                <p><?php echo $nim04; ?></p>
                <p><?php echo $email04; ?></p>
                <img src="img/<?php echo $img; ?>" alt="photo Kelompok" />
            </li>

            <!-- Card 5 -->
            <li>
                <h2><?php echo $name05; ?></h2>
                <p><?php echo $nim05; ?></p>
                <p><?php echo $email05; ?></p>
                <img src="img/<?php echo $img; ?>" alt="photo Kelompok" />
            </li>
        </ul>
    </div>
</body>
</html>
