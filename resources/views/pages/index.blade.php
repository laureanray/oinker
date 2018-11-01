@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Oinker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./register">Register Now</a>
                </li>

            </ul>
        </div>
    </div>
    </nav>

    <div class="container">
      <?php
      ?>
           <div class="tagline">
          <h1>Welcome to Oinker</h1>
          <p> We don't tweet, we oink.</p>
          <button class="btn btn-dark"> Register Now </button>
      </div>
  </div>
@endsection
