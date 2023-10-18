<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrateur</title>
    <link rel="stylesheet" href="{{ asset('Style Dash/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('Style Dash/tableau.css') }}" />
    <link rel="stylesheet" href="{{ asset('Azures BootStrap_files/bootstrap.css') }}" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <nav class="sidebar">
        <a href="#" class="logo">Paroisse Universitaire</a>
        <div class="menu-content">
            <ul class="menu-items">
                <div class="menu-title">Demandes de messe</div>

                <li class="item">
                    <a href="#">Demandes en entente</a>
                </li>

                <li class="item">
                    <a href="#">Demandes validées</a>
                </li>

                <li class="item">
                    <a href="#">Ajouter un utilisateur</a>
                </li>

            </ul>
        </div>
    </nav>

    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>

    <!-- CONTENUE -->
    <main class="main">
    <div style="display:flex; flex-direction:column">
    <span style="display:flex; justify-content:center; font-size:30px">Liste des demandes</span><br>
        <table>
            <thead>
                <tr>
                    <th scope="col">Demandeur</th>
                    <th scope="col">Intention</th>
                    <th scope="col">date et heure</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Account">Visa - 3412</td>
                    <td data-label="Due Date">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum quaerat,
                        quisquam
                        
                    </td>
                    <td data-label="Amount">$1,190</td>
                    <td data-label="Period">03/01/2016 - 03/31/2016</td>
                    <td data-label="Period">
                        <a href="#" class="btn btn-primary">M</a>
                        <a href="#" class="btn btn-success">V</a>
                        <a href="#" class="btn btn-danger">S</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row" data-label="Account">Visa - 6076</td>
                    <td data-label="Due Date">03/01/2016</td>
                    <td data-label="Amount">$2,443</td>
                    <td data-label="Period">02/01/2016 - 02/29/2016</td>
                    <td data-label="Period">
                        <a href="#" class="btn btn-primary">M</a>
                        <a href="#" class="btn btn-success">V</a>
                        <a href="#" class="btn btn-danger">S</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row" data-label="Account">Corporate AMEX</td>
                    <td data-label="Due Date">03/01/2016</td>
                    <td data-label="Due Date">03/01/2016</td>
                    <td data-label="Amount">$1,181</td>
                    <td data-label="Period">
                        <a href="#" class="btn btn-primary">M</a>
                        <a href="#" class="btn btn-success">V</a>
                        <a href="#" class="btn btn-danger">S</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row" data-label="Acount">Visa - 3412</td>
                    <td data-label="Due Date">02/01/2016</td>
                    <td data-label="Amount">$842</td>
                    <td data-label="Amount">$842</td>
                    <td data-label="Period">
                        <a href="#" class="btn btn-primary">M</a>
                        <a href="#" class="btn btn-success">V</a>
                        <a href="#" class="btn btn-danger">S</a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </main>
    <!-- FIN CONTENUE -->
    <script src="{{ asset('Style Dash/script.js') }}"></script>
    <script src="{{ asset('Azures BootStrap_files/bootstrap.min.js') }}"></script>
</body>

</html>
