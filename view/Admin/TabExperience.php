<?php
  require_once('../../inc/init.inc.php'); ob_start();
  require_once('../../inc/adminHeader.inc.php');
  $r = execute_requete("SELECT * FROM experience"); 
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
            Experiences</div>
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-success" ><a href="?exp=new" style="color:white;">Ajouter Experience</a></button><br>
            
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <?php
                        // Suppression des experience :

                            if(isset($_GET['exp']) && $_GET['exp'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                              execute_requete("DELETE FROM experience WHERE id_experience='$_GET[id_experience]'");

                               header('location:TabExperience.php');

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
                    <?php while ($experience = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <?php foreach($experience as $indice => $co) : ?>
                          <td><?php echo $co; ?></td>
                        <?php endforeach;?>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?exp=delete&id_experience=<?php echo $experience['id_experience']?>" style="color:white;">
                                Delete
                              </a>
                          </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?exp=update&id_experience=<?php echo $experience['id_experience']?>" style="color:white;">
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

                  if(isset($_GET['exp']) && $_GET['exp'] == 'update') {

                    execute_requete("UPDATE experience SET experience='$_POST[experience]', lieu='$_POST[lieu]', date_experience='$_POST[date_experience]', description='$_POST[description]' WHERE id_experience='$_GET[id_experience]'");
              
                    header('location:TabExperience.php');
              
                  }else{

                    execute_requete("INSERT INTO experience(experience, lieu, date_experience, description) VALUES('$_POST[experience]','$_POST[lieu]','$_POST[date_experience]','$_POST[description]')");

                    header('location:TabExperience.php');

                  }
              }

              if( isset($_GET['exp']) && $_GET['exp'] == 'update'){
                $r = execute_requete("SELECT * FROM experience WHERE id_experience='$_GET[id_experience]'");

                $experience = $r->fetch(PDO::FETCH_ASSOC);
              }

              
              $experience2 = (isset($experience['experience'])) ? $experience['experience'] :'';
              $lieu = (isset($experience['lieu'])) ? $experience['lieu'] :'';
              $date_experience = (isset($experience['date_experience'])) ? $experience['date_experience'] :'';
              $description = (isset($experience['description'])) ? $experience['description'] :'';
                ?>

                </tbody>
              </table>
            </div>
          </div>
          <?php if(isset($_GET['exp']) && ($_GET['exp'] == 'update' || $_GET['exp'] == 'new' )) : 
            
            if(isset($_GET['id_experience'])){ // si l'id_experience est présent dans l'URL
              $r = execute_requete("SELECT * FROM experience WHERE id_experience='$_GET[id_experience]'");
      
              $experiences_actuel = $r->fetch(PDO::FETCH_ASSOC);
              debug($experiences_actuel);
          }
            ?>
          <form method="post">

    <label for="experience">experience</label><br>
    <input type="text" name="experience" id="experience" class="form-control" value="<?= $experience2; ?>"><br><br>

    <label for="lieu">lieu</label><br>
    <input type="text" name="lieu" id="lieu" class="form-control" value="<?= $lieu; ?>"><br><br>

    <label for="date_experience">date_experience</label><br>
    <input type="date" name="date_experience" id="date_experience" class="form-control" value="<?= $date_experience; ?>"><br><br>

    <label for="description">description</label><br>
    <input name="description" id="description" value="<?= $description; ?>"><br><br>

    <input type="submit" class="btn btn-secondary" value="ajouter">

</form>

<?php endif ?>
        </div>

      </div>
      <!-- /.container-fluid -->
<?php require_once('../../inc/adminFooter.inc.php'); ?>