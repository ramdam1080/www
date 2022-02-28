@extends('layouts/app')

@section('content')
    @include('layouts/nav')
    <div class=" mt-5 container">
        @include('layouts/sousnav')
        <div class="d-flex gap-3">
            <div class="h">
                <img class="imgg" src="{{ asset("img/a.jpg") }}" alt="">
            </div>
            <div>
                <h2>About modern School</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae natus totam libero quam omnis iusto eveniet, eaque explicabo pariatur voluptatem! Saepe, et. Iusto totam illo consequatur ratione eligendi, inventore fugiat? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum eaque animi veniam aspernatur quasi sunt incidunt, ullam provident velit perspiciatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, numquam. Lorem ipsum dolor sit amet consectetur adi</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut debitis laudantium tempore? Enim, in quibusdam. Repellendus laborum aliquid commodi dicta? Placeat voluptate ullam praesentium commodi atque provident cumque, eum blanditiis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ratione.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut debitis laudantium tempore? Enim, in quibusdam. Repellendus laborum aliquid commodi dicta? Placeat voluptate ullam praesentium commodi atque provident cumque, eum blanditiis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel ad qui molestias nobis, dolor doloribus animi. Quae, excepturi cumque!</p>
            </div>

        </div>
    </div>
    @include("layouts/footer")
@endsection