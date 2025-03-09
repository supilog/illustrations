@extends('layouts.app')

@section('css')
    @vite(['resources/scss/usagi.scss'])
@endsection

@section('content')
    <div class="container">
        <div class="usagi">
            <div class="usagi__ears">
                <div class="usagi__ear usagi__ear--right"></div>
                <div class="usagi__ear usagi__ear--left"></div>
            </div>
            <div class="usagi__face">
                <div class="usagi__eyes">
                    <div class="usagi__eye usagi__eye--right"></div>
                    <div class="usagi__eye usagi__eye--left"></div>
                </div>
                <div class="usagi__mouth"></div>
            </div>
        </div>
    </div>
@endsection


