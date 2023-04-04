@extends('layouts.layout')

@section('content')
    <section class=" container py-5">
        <div class="container py-5" style="background-color:#ffe9dd">
            <h1 class="text-center">Contact Us</h1>
            <p class="aboutP"  >Have a question or comment? Send us a message using the form below.</p>
            <form action="{{ url('handleContact') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary mt-5">Send Message</button>
            </form>
        </div>
    </section>
@endsection
