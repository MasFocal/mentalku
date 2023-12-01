<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gejala</title>
</head>
<body>
    <?php
        include "navbar.php";
        if(isset($_POST["edit"])) {
            $id = $_POST["id_gejala"];
            header("location: edit-gejala.php?id=".$id."");
        }
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_gejala"];
            mysqli_query($konek_db, "DELETE FROM `gejala` WHERE `idgejala`='$id'");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR GEJALA</p>
        <a href="tambah-gejala.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Action</th>
                </tr>
                <?php
                    $limit = 15;

                    if (isset($_GET["page"])) {    
                        $page_number  = $_GET["page"];    
                    }else{
                        $page_number=1;
                    }

                    $initial_page = ($page_number-1) * $limit; 

                    $query  = mysqli_query($konek_db, "SELECT * FROM gejala WHERE 1 LIMIT $initial_page, $limit");
                    /*$query2 = mysqli_query($konek_db, "SELECT * FROM gejala LIMIT $initial_page, $limit");*/
                    $id = $initial_page+0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_gejala" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$id."</td>
                                <td>".$data[0]."</td>
                                <td>".$data[1]."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"edit-gejala.php?id=".$data[0]."\"><button name='edit'>Edit</button></a>
                                        <a href=\"?hapus&id_gejala=".$data[0]."\"><button name='hapus'>Hapus</button></a>
                                    </div>  
                                </td>
                            ";
                        ?>
                    </tr>
                </form>
                <?php
                    }
                ?>
            </table>
            <div class="pagination">
                <?php 
                    $query2 = mysqli_query($konek_db, "SELECT COUNT(*) FROM gejala");
                    $data2  = mysqli_fetch_row($query2);
                    
                    $total_rows = $data2[0];              
                    echo "</br>";            
                    // get the required number of pages
                    $total_pages = ceil($total_rows / $limit);     
                    $pageURL = "";

                    if($page_number>=2){
                        echo "<a href='gejala.php?page=".($page_number-1)."'>  Prev </a>";
                    }

                    for($i=1; $i<=$total_pages; $i++){
                        if ($i == $page_number) {   
                            $pageURL .= "<a class = 'active' href='gejala.php?page=".$i."'>".$i." </a>";   
                        }else{
                            $pageURL .= "<a href='gejala.php?page=".$i."'>".$i." </a>";
                        }   
                    }

                    echo $pageURL;    
                    if($page_number<$total_pages){   
                        echo "<a href='gejala.php?page=".($page_number+1)."'>  Next </a>";
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>