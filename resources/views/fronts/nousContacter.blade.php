@extends('frontLayout')

<main>

  <div class="container col-12 col-12 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-12 text-center text-lg-center">
        <h1 class="display-4 fw-bold lh-1 mb-3 text-light">Nous Contacter</h1>
        <p class="col-lg-12 text-light"> Vos questions, nos réponses. Contactez LeDigitalMaster pour une assistance personnalisée et des opportunités de collaboration.</p>
      </div>
    </div>
</div>

<div class="formulaire col-md-10 mx-auto col-lg-5 shadow">
  <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Votre nom</label>
      <input type="text" name="name" class="form-control input-field" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Votre email</label>
      <input type="email" name="email" class="form-control input-field" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Votre message</label>
      <textarea name="message" class="form-control input-field" style="height: 160px" required></textarea>
    </div>

    <button class="w-100 btn btn-lg btn-warning" onclick="sendWhatsapp()" type="button">Envoyer</button>

    <hr class="my-4">
    <small class="text-muted">C'est avec plaisir que nous recevrons vos messages.</small>
  </form>
</div>

</main>

