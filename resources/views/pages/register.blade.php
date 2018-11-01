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
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./register">Register Now</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
   <div class="container register">
          <div class="col-lg-6">
              <form>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <div class="form-group row">
                          <div class="col-7">
                              <input type="email" class="form-control" placeholder="First Name">
                          </div>

                          <div class="col-5">
                              <input type="email" class="form-control" placeholder="Last Name">
                          </div>
                      </div>
                      {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-primary">Register </button>
              </form>
          </div>
   </div>

@endsection
