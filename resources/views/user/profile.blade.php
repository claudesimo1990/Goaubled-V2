@extends('user.dashboard')

@section('dashboard_title') Profile | {{ $user->name }} @stop

@section('dashbord_content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-2 border pt-2">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div></hr><br>
        </div>
        <div class="col-md-10 pt-2">
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">      
                            <div class="col-xs-6">
                                <label for="first_name">Nom</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nom" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                              <label for="last_name">Prenom</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Prenom" title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                               <label for="mobile">Ville</label>
                                <input type="text" class="form-control" name="ville" id="Ville" placeholder="Ville" title="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        
                            <div class="col-xs-6">
                                <label for="Adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse" title="">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="email">Boite Postale</label>
                                <input type="email" class="form-control" id="location" placeholder="Boite Postale" title="">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" title="Mot de passe">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                              <label for="password2">Verification</label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Mot de passe de verification" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-12">
                             <br>
                               <button class="btn btn-lg btn-success ml-3" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> enregistrer</button>
                         </div>
                   </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection