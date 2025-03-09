@extends('layouts.app')

@section('css')
    @vite(['resources/scss/app.scss'])
@endsection

@section('content')
    <div class="container">
        <div class="face">
            <div class="eye" style="--left: 28%"></div>
            <div class="eye" style="--right: 28%"></div>
            <div class="mark">
                <div class="part1"></div>
                <div class="part2"></div>
                <div class="part3"></div>
            </div>
            <div class="mouth">
                <div class="bottom"></div>
                <div class="top"></div>
                <div class="nose">
                    <div class="main"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


