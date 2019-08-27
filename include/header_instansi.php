<?php
    if(!empty($_SESSION['admin'])){
        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
        while($data = mysqli_fetch_array($query)){
            echo '
                <div class="col s12" id="header-instansi">
                    <div class="card">
                        <div class="card-content">';
                            if(!empty($data['logo'])){
                                echo '<div class="circle left"><img class="logo" src="./upload/'.$data['logo'].'"/></div>';
                            } else {
                                echo '<div class="circle left"><img class="logo" src="./asset/img/logo-polisi.png"/></div>';
                            }

                            if(!empty($data['nama'])){
                                echo '<h4 class="ins">'.$data['nama'].'</h4>';
                            } else {
                                echo '<h4 class="ins">Polrestabes Bandung</h4>';
                            }

                            if(!empty($data['alamat'])){
                                echo '<h6 class="almt">'.$data['alamat'].'</h6>';
                            } else {
                                echo '<h6 class="almt">Jl. Merdeka No.18-21, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</h6>';
                            }
                            echo '
                        </div>
                    </div>
                </div>';
        }
    } else {
        header("Location: ../");
        die();
    }
?>