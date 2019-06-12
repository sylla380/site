<?php
  require_once('../../inc/init.inc.php'); ob_start();
  require_once('../../inc/adminHeader.inc.php');
  
  $r = execute_requete("SELECT * FROM competences"); 
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
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-success" ><a href="?op=new" style="color:white;">Ajouter competence</a></button><br>
            
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <?php
                        // Suppression des competences :

                            if(isset($_GET['op']) && $_GET['op'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                              execute_requete("DELETE FROM competences WHERE id_competences='$_GET[id_competences]'");

                               header('location:TabCompetence.php');

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
                    <?php while ($competences = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <?php foreach($competences as $indice => $co) : ?>
                          <td><?php echo $co; ?></td>
                        <?php endforeach;?>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?op=delete&id_competences=<?php echo $competences['id_competences']?>" style="color:white;">
                                Delete
                              </a>
                          </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success">
                              <a href="?op=update&id_competences=<?php echo $competences['id_competences']?>" style="color:white;">
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

                    execute_requete("UPDATE competences SET name='$_POST[name]',capacite='$_POST[capacite]' WHERE id_competences='$_GET[id_competences]'");
              
                    header('location:TabCompetence.php');
              
                  }else{

                    execute_requete("INSERT INTO competences(name, capacite) VALUES('$_POST[name]','$_POST[capacite]')");

                    header('location:TabCompetence.php');

                  }
              }

              if( isset($_GET['op']) && $_GET['op'] == 'update'){
                $r = execute_requete("SELECT * FROM competences WHERE id_competences='$_GET[id_competences]'");

                $competences =$r->fetch(PDO::FETCH_ASSOC);
              }

              
              $name = (isset($competences['name'])) ? $competences['name'] :'';
              $capacite = (isset($competences['capacite'])) ? $competences['capacite'] :'';
                ?>

                </tbody>
              </table>
            </div>
          </div>
          <?php if(isset($_GET['op']) && ($_GET['op'] == 'update' || $_GET['op'] == 'new' )) : 
            
            if(isset($_GET['id_competences'])){ // si l'id_competences est présent dans l'URL
              $r = execute_requete("SELECT * FROM competences WHERE id_competences='$_GET[id_competences]'");
      
              $competences_actuel = $r->fetch(PDO::FETCH_ASSOC);
              debug($competences_actuel);
          }
            ?>
          <form method="post">

    <label for="name">name</label><br>
    <input type="text" name="name" id="name" class="form-control" value="<?=$name?>"><br><br>

     <label for="capacite">capacite</label><br>
    <input type="text" name="capacite" id="capacite" class="form-control" value="<?=$capacite?>"><br><br>

    <input type="submit" class="btn btn-secondary" value="s'inscrire">

</form>

<?php endif ?>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->
<?php require_once('inc/adminFooter.inc.php'); ?>
