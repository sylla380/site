<?php
  require_once('../../inc/init.inc.php'); ob_start();
  require_once('../../inc/adminHeader.inc.php');
  
  $r = execute_requete("SELECT * FROM contact"); 
  // debug($r);
?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Contact</div>
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-success" ><a href="?op=new" style="color:white;">Ajouter contact</a></button><br>
            
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <?php
                        // Suppression des contacts :

                            if(isset($_GET['op']) && $_GET['op'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                              execute_requete("DELETE FROM contact WHERE id_contact='$_GET[id_contact]'");

                               header('location:Tabcontact.php');

                            }
                          for ($i = 0; $i < $r->columnCount(); $i++) {
                            // debug($r);
                            $colonne = $r->getColumnMeta($i); 
                        ?>

                        <th><?=$colonne['name'];?></th>
                        
                        <?php } ?>

                        <th colspan="2" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while ($contacts = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <?php foreach($contacts as $indice => $co) : ?>
                          <td><?php echo $co; ?></td>
                        <?php endforeach;?>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?op=delete&id_contact=<?php echo $contacts['id_contact']?>" style="color:white;">
                                Delete
                              </a>
                          </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?op=update&id_contact=<?php echo $contacts['id_contact']?>" style="color:white;">
                                    Edite
                              </a>
                            </button>
                          </td>
                        
                      </tr>
                <?php } 

                if(!empty($_POST)){ // si le formulaire à été validé et qu'il y a des infos dedans

                  foreach ($_POST as $key => $value) {
                      $_POST[$key] = htmlentities(addslashes($value));
                   }

                  if(isset($_GET['op']) && $_GET['op'] == 'update') {

                    execute_requete("UPDATE contact SET email='$_POST[email]',tel='$_POST[tel]',reseau='$_POST[reseau]' WHERE id_contact='$_GET[id_contact]'");
              
                    header('location:Tabcontact.php');
              
                  }else{

                    execute_requete("INSERT INTO contact(email, tel, reseau) VALUES('$_POST[email]','$_POST[tel]','$_POST[reseau]')");

                    header('location:Tabcontact.php');

                  }
              }

              if( isset($_GET['op']) && $_GET['op'] == 'update'){
                $r = execute_requete("SELECT * FROM contact WHERE id_contact='$_GET[id_contact]'");

                $contacts =$r->fetch(PDO::FETCH_ASSOC);
              }

              
              $email = (isset($contacts['email'])) ? $contacts['email'] :'';
              $tel = (isset($contacts['tel'])) ? $contacts['tel'] :'';
                ?>

                </tbody>
              </table>
            </div>
          </div>
          <?php if(isset($_GET['op']) && ($_GET['op'] == 'update' || $_GET['op'] == 'new' )) : 
            
            if(isset($_GET['id_contact'])){ // si l'id_contact est présent dans l'URL
              $r = execute_requete("SELECT * FROM contact WHERE id_contact='$_GET[id_contact]'");
      
              $contacts_actuel = $r->fetch(PDO::FETCH_ASSOC);
              debug($contacts_actuel);
          }
            ?>
          <form method="post">

    <label for="email">email</label><br>
    <input type="text" name="email" id="email" class="form-control" value="<?=$email?>"><br><br>

     <label for="tel">tel</label><br>
    <input type="text" name="tel" id="tel" class="form-control" value="<?=$tel?>"><br><br>

    <input type="submit" class="btn btn-secondary" value="ajouter">

</form>

<?php endif ?>
        </div>

      </div>
      <!-- /.container-fluid -->
<?php require_once('../../inc/adminFooter.inc.php'); ?>
