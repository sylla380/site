<?php
  require_once('../../inc/init.inc.php'); ob_start();
  require_once('../../inc/adminHeader.inc.php');
  
  $r = execute_requete("SELECT * FROM formation"); 
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
            Formations</div>
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-success" ><a href="?form=new" style="color:white;">Ajouter Formation</a></button><br>
            
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <?php
                        // Suppression des formation :

                            if(isset($_GET['form']) && $_GET['form'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                              execute_requete("DELETE FROM formation WHERE id_formation='$_GET[id_formation]'");

                               header('location:TabFormation.php');

                            }
                          for ($i = 0; $i < $r->columnCount(); $i++) {
                            // debug($r);
                            $colonne = $r->getColumnMeta($i); 
                        ?>
                        <th><?=$colonne['name']; 
                        // debug($colonne);?></th>
                        <?php } ?>
                        <th colspan="2" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while ($formations = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <?php foreach($formations as $indice => $co) : ?>
                          <td><?php echo $co; ?></td>
                        <?php endforeach;?>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?form=delete&id_formation=<?php echo $formations['id_formation']; ?>" style="color:white;">
                                Delete
                              </a>
                          </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?form=update&id_formation=<?php echo $formations['id_formation']; ?>" style="color:white;">
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

                  if(isset($_GET['form']) && $_GET['form'] == 'update') {

                    execute_requete("UPDATE formation SET formation='$_POST[formation]',description='$_POST[description]',lieu='$_POST[lieu]',date_formation='$_POST[date_formation]', description='$_POST[description]' WHERE id_formation='$_GET[id_formation]'");
              
                    header('location:TabFormation.php');
              
                  }else{

                    execute_requete("INSERT INTO formation (formation, description, lieu, date_formation) VALUES('$_POST[formation]','$_POST[description]','$_POST[lieu]','$_POST[date_formation]')");

                    header('location:TabFormation.php');

                  }
              }

              if( isset($_GET['form']) && $_GET['form'] == 'update'){
                $r = execute_requete("SELECT * FROM formation WHERE id_formation='$_GET[id_formation]'");

                $formations =$r->fetch(PDO::FETCH_ASSOC);
              }

              
              $formation = (isset($formations['formation'])) ? $formations['formation'] :'';
              $lieu = (isset($formations['lieu'])) ? $formations['lieu'] :'';
              $date_formation = (isset($formations['date_formation'])) ? $formations['date_formation'] :'';
              $description = (isset($formations['description'])) ? $formations['description'] :'';
                ?>

                </tbody>
              </table>
            </div>
          </div>
          <?php if(isset($_GET['form']) && ($_GET['form'] == 'update' || $_GET['form'] == 'new' )) : 
            
            if(isset($_GET['id_formation'])){ // si l'id_formation est présent dans l'URL
              $r = execute_requete("SELECT * FROM formation WHERE id_formation='$_GET[id_formation]'");
      
              $formations_actuel = $r->fetch(PDO::FETCH_ASSOC);
              debug($formations_actuel);
          }
            ?>
          <form method="post">

    <label for="formation">formation</label><br>
    <input type="text" name="formation" id="formation" class="form-control" value="<?=$formation?>"><br><br>

    <label for="description">description</label><br>
    <textarea type="text" name="description" id="description" cols="30" rows="10" value="<?=$description?>"></textarea><br><br>

    <label for="lieu">lieu</label><br>
    <input type="text" name="lieu" id="lieu" class="form-control" value="<?=$lieu?>"><br><br>

    <label for="date_formation">date_formation</label><br>
    <input type="text" name="date_formation" id="date_formation" class="form-control" value="<?=$date_formation?>"><br><br>


    <input type="submit" class="btn btn-secondary" value="ajouter">

</form>

<?php endif ?>
        </div>

      </div>
      <!-- /.container-fluid -->
<?php require_once('../../inc/adminFooter.inc.php'); ?>
