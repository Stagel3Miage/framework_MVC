
<div  id="Registration"  class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!--Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
              &times;</span></button>
                  <h4 class="modal-title">S'enregistrer</h4>
              </div>
              <div class="modal-body">
                <form action = "<?php echo CSS_PATH; ?>/ajouter_membre.php" method="POST" id="insert_form11" class="form-horizontal" >
                          <!-- sexe -->
                            <div class="form-group">
                              <label for="sexe" class="col-sm-2 control-label">Sexe:</label>
                              <div class="col-sm-2 col-sm-push-1">
                                  <select class="form-control" name ="sexe">
                                      <option>Femme</option>
                                      <option>Homme</option>
                                  </select>
                              </div>
                          </div>
                          <!--nom -->
                          <div class="form-group">
                              <label for="nom" class="col-sm-2 control-label">Nom:</label>
                              <div class="col-sm-6 col-sm-push-1">
                                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" aria-hidden="true" value="">
                              </div>
                          </div>
                          <!-- prénom -->
                          <div class="form-group">
                              <label for="prénom" class="col-sm-2 control-label">Prénom:</label>
                              <div class="col-sm-6 col-sm-push-1">
                                  <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" aria-hidden="true">
                              </div>
                          </div>
                          <!-- mail -->
                          <div class="form-group">
                              <label for="Email" class="col-sm-2 control-label">Email:</label>
                              <div class="col-sm-6 col-sm-push-1">
                                  <input type="email" class="contact-email form-control" id="email" name="email" placeholder="Email" aria-hidden="true" required="">
                              </div>
                          </div>
                          <!-- date de naissance -->
             
                      <!--div class="form-group">
                          <label for="deban" class="control-label">Né(e) le:</label>
                          <div class="input-group date fj-date " id="modal-date">
                              <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                          </div>
                      </div-->

                          <!-- mdp -->
                          <div class="form-group">
                            <label for="motdepasse" class="col-sm-2 control-label">Mot de passe:</label>
                              <div class="col-sm-6 col-sm-push-1">
                                  <input type="password" class="form-control" id="mdp1" name="mdp1" placeholder="Mot de passe" required="">
                              </div>
                           </div>
                           <!-- confirmation mdp -->
                           <div class="form-group">
                             <label for="confirmationmotdepasse" class="col-sm-2 control-label">Confirmez:</label>
                              <div class="col-sm-6 col-sm-push-1">
                                  <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Mot de passe">
                              </div>
                           </div>

                           <div class="form-group ">
                              <label class="control-label col-sm-2 requiredField" for="date">
                               Date
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <div class="col-sm-10">
                               <div class="input-group">
                                <div class="input-group-addon">
                                 <i class="fa fa-calendar">
                                 </i>
                                </div>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                               </div>
                              </div>
                           </div>
                           <!-- s'enregistrer -->
                          <div class="modal-footer">
                              <!-- Enregistrer -->
                              <div class=" col-sm-1 col-sm-push-2">
                                  <input type="submit" class="btn btn-primary" name="submit" value ="save"/>
                              </div>
                              <!-- quitter -->
                              <div class=" col-sm-1 col-sm-push-5">
                                <button type="button" name="button" class="btn btn-default btn--sm" data-dismiss="modal">Quitter</button>
                              </div>
                          </div>

                </form>
                    
            </div>
          </div>
      </div>
  </div>
