<div class="header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <a href="index.php">
        <img src="../asset/img/logo.png" id="logo">
    </a>
    <div class="navbar">
        <a id="menu" href="index.php">Home</a>
        <a id="menu" href="404.php">Diagnosa Gejala</a>
        <a id="menu" href="404.php">Informasi Diagnosa</a>
        <a id="menu" href="404.php">Profile</a>
        <a id="menu" href="about.php">About</a>
        <a id="menu" href="../index.php"><button class="button-login" id="btn-login">Logout</button></a>
        <!--
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
        -->
    </div>
    <div class="dropdown">
        <li><a id="menu" href="index.php">Home</a></li>
        <li><a id="menu" href="404.php">Diagnosa Gejala</a></li>
        <li><a id="menu" href="404.php">Informasi Diagnosa</a></li>
        <li><a id="menu" href="404.php">Profile</a></li>
        <li><a id="menu" href="404.php">About</a></li>
        <li><a id="menu" href="../index.php"><button class="button-login" id="btn-login">Logout</button></a></li>
    </div>
    <!--
    <script>
        const toggleBtn = document.querySelector('.bars')
        const toggleBtnIcon = document.querySelector('.bars i')
        const dropDownMenu = document.querySelector('.dropdown')

        toggleBtn.onClick = function (){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-x'
            : 'fa-solid fa-bars'
        }
    </script>
    -->
</div>