@extends('layouts.app')

@section('content')
<div id='aboutPage'>
    <div class='mainAbout'>
        <div class='aboutText'>
            <h2>Meet the person behind Confeeshirt</h2>
            <h1>_______ Mesuara Kaleziq _______</h1>
            <h3>Web Developer, Social Media, Pizza Artist</h3>



        </div>
        <div class='aboutImg'>

                    <img src='assets/me.jpg' alt='mesuara kaleziq' class='meImg'>

                

        </div>


    </div>
    <div class='aboutDescription'>
    <div class='aboutCodingDes'>
            <div class='aboutCoding'>
                <p>
                I started learning to code on my own a few years ago (C++, JavaScript). As I got exposed to coding and the things I could do with it the more I wanted to explore. I finished the New York Code+Design Academy bootcamp for Web Development and also I took an advanced class with The Knowledge House for Data Science with Python.
                <br>

                 Since I've started my journey into the tech world, I've had the opportunity to attend many tech conferences. The great thing about these conferences is that you meet people network and on top of that you also get some SWAG(free stuff ex: shirt, sock, water bottle, stickers). To give my thanks to the companies I've decided to write a blog where I showcase my SWAGS and talk about the company.   

                </p>
            </div>

            <div class='confeeImg'>
                <div class='cImgWrap'>
                <img src='assets/G-sign.jpg'>
                <p> Grace Hopper Conference '19</p>
                </div>
                

            </div>
        </div>
        <br>
        <br>
            <div class='aboutPizza'>
                <div class='aboutPizzaText'>
                    <p>
                    On my free time I like to make cool pizzas. I mean the pizzaman makes it I just do the design.
                    <p>
                </div>

                <div class='imagePizzaGall'>
                    <img src='assets/capital.jpg'>
                    <img src='assets/4leaf.jpg'>
                    <img src='assets/super.jpg'>
                </div>


            </div>

    </div>

</div>
@endsection