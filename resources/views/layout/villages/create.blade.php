@extends('layout.default')
@section('main')
<div class="content">
  <div class="container-fluid">
      <div class="row">
<form method="POST" action="" name="form-create-user" id="id-form-create-user">
  <div class="form-group">
    <label for="input-nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="emailHelp" placeholder="Entrer votre nom SVP">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
</div>
</div>
</div>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Enregistrer</button>
</form>
@endsection
