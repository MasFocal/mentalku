<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Basis Pengetahuan</title>
</head>
<body>
    <?php
        include "navbar.php";
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_pd"];
            mysqli_query($konek_db, "DELETE FROM `basispengetahuan` WHERE `diagnosa`='$id'");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR BASIS PENGETAHUAN</p>
        <a href="tambah-bp.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Gejala</th>
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

                    $query = mysqli_query($konek_db, "SELECT * FROM `basispengetahuan` WHERE 1 LIMIT $initial_page, $limit");
                    $id = $initial_page+0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_pd" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$id."</td>
                                <td>".$data['0']."</td>
                                <td>".$data['1']."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"?hapus&diagnosa=".$data[0]."\"><button name='hapus'>Hapus</button></a>
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
                    $query2 = mysqli_query($konek_db, "SELECT COUNT(*) FROM basispengetahuan");
                    $data2  = mysqli_fetch_row($query2);
                    
                    $total_rows = $data2[0];              
                    echo "</br>";            
                    // get the required number of pages
                    $total_pages = ceil($total_rows / $limit);     
                    $pageURL = "";

                    if($page_number>=2){
                        echo "<a href='basis-pengetahuan.php?page=".($page_number-1)."'>  Prev </a>";
                    }

                    for($i=1; $i<=$total_pages; $i++){
                        if ($i == $page_number) {   
                            $pageURL .= "<a class = 'active' href='basis-pengetahuan.php?page=".$i."'>".$i." </a>";   
                        }else{
                            $pageURL .= "<a href='basis-pengetahuan.php?page=".$i."'>".$i." </a>";
                        }   
                    }

                    echo $pageURL;    
                    if($page_number<$total_pages){   
                        echo "<a href='basis-pengetahuan.php?page=".($page_number+1)."'>  Next </a>";
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>