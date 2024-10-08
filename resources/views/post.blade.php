@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/post.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted on September 18, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <h2 class="section-heading">The Final Frontier</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <blockquote class="blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                        consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta
                        voluptatibus corporis atque iste neque sit tempora!
                    </blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <h2 class="section-heading">Reaching for the Stars</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <a href="#!"><img class="img-fluid" src="assets/img/sample-post.jpg" alt="..."/></a>
                    <span class="caption text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                        aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                        neque sit tempora!</p>
                    <p><i>Placeholder text by <a href="#!">Source</a>.</i></p>
                    <!-- Pager-->
                    <div><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('post.index') }}">← Back</a></div>
                </div>
            </div>
        </div>
        </div>
    </article>
@endsection
