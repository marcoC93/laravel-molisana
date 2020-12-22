@extends('layout.layout')

@section('header')
    <header>

    </header>
@endsection
@section('main')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
                    <address class="">
                        Ragione sociale: La Molisana S.P.A
                    </address>
                    <address>
                        Sede legale: Contrada Colle delle Api, 100/A
                    </address>

                </div>
                <div class="col-md-3">
                    <h3>pastificio</h3>
                    <ul>
                        <li>il pastificio</li>
                        <li>grano decorticato a pietra</li>
                        <li>il Molise c'é</li>
                        <li>filiera integrata</li>
                        <li>100 anni di pasta</li>
                        <li>sartoria della pasta</li>
                        <li>spaghetto quadrato</li>
                        <li>le persone</li>
                    </ul>
                    <h3>prodotti</h3>
                    <ul>
                        <li>le classiche</li>
                        <li>le integrali</li>
                        <li>le speciali</li>
                        <li>le biologiche</li>
                        <li>le gluten-Free</li>
                        <li>le semole</li>
                        <li>le semole</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>collezione da chef</h3>
                    <ul>
                        <li>collezioni da chef</li>
                        <li>grandi cucine</li>
                        <li>biologiche</li>
                        <li>quadrate</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
