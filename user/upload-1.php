<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Folder tujuan upload file
		$eror		= false;
		$folder		= '../foto/';
		$max_size	= 2000000000; // 2MB
	if(isset($_FILES['photo']['name'])){ 
		$file_type	= array('jpg','jpeg','png');
		#$file_type	= array('pdf','docx','doc','png','jpg','jpeg','txt','xls','xlsx','ppt','pptx');
		//tukuran maximum file yang dapat diupload
			//Mulai memorises data
			$file_name	= $_FILES['photo']['name'];
			$file_size	= $_FILES['photo']['size'];
			$explode	= explode('.',$file_name);
			$namaf		= $explode[0];
			$extensi	= $explode[count($explode)-1];
			$namab 		= "photo-".$namaf.".".$extensi;
			$tmpf=$_FILES['photo']['tmp_name'];
	}
	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
		if($file_size > $max_size){
			$eror   = true;
			$pesan .= '- Ukuran file melebihi batas maximum<br />';
		}
					
		//check ukuran file apakah sudah sesuai
				
		if($eror == true){
			echo '<div id="eror">'.$pesan.'</div>';
		}else{
			//mulai memproses upload file
			if(move_uploaded_file($tmpf, $folder.$namab)){
				//catat nama file ke database
				//	$catat = mysql_query('insert into produk values("","'.$judul.'","'.$tanggal.'","'.$file_name.'","'.$folder.'")');
				$catat = mysqli_query($konek_db, "INSERT INTO user VALUES (,'.$iduser.','.$file_name.','.$folder.')");
				echo '<div id="msg">Berhasil mengupload file '.$namab.'</div>';
			}else{
				echo "Proses upload eror lek";
			}
		}	
	}
?>
<!--
<form id="form" method="post" enctype="multipart/form-data"> 

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label>Pas Photo 3x4 ( .jpg / .jpeg)</label><br>
			<input type="file" name="photo" onchange="form.submit()" >
		</div>
		<div class="form-group">
			
		</div>
	</div>
</div>
</form>
-->

<?php    
    $target_dir = 'file';    
    //mengecek keberadaan direktori  
    if((file_exists($target_dir))&&(is_dir($target_dir)))   
    {   
     //menaruh fungsi opendir kedalam sebuah handle   
     $handle = opendir ($target_dir);   
     
     //mengecek proses handle fungsi opendir    
     if ($handle) {    
     //   echo "Selamat datang di direktori Omega :<br />";  
  	 $i = '-1';
         while (($file = readdir($handle) ) !== false){  
                if($file != "." AND $file != ".."){
					$explo	= explode('-',$file);
					$explod	= explode('.',$explo[1]);
					$namx	= $explo[1];
					$nam	= $explo[0];
					$id	= $explod[0];
					if($nam=="photo" ){
					echo "<a href='$target_dir/$file' target='blank'><img src='file/" . $file . "' height='100' /><br>" . $file . "</a><br>";
					}
			
			}  
				$i++;
	      }
      closedir($handle);  
     }    
     else {    
     echo "Direktori <b>".$target_dir."</b> tidak dapat dibuka";    
     }          
    }   
    else {   
     echo "Direktori <b>".$target_dir."</b> Tidak ada";  
    }   
//  }   
//  }    
  ?> 	
