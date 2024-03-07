@extends('frontend_views.layout.layout')

@section('title', 'Контакт')

@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>КОНТАКТ</h1>
    </div>
</div>  
<div class="form-container">

    <div class="contact-info">
        <h1>Контактирајте не</h1>
        <p>email: email@email.com</p>
        <p>Телефон: 12345678</p>
    </div>
    <form method="POST" action="{{ route('contact.send') }}" class="form">
        @csrf
        <label for="name">Име и презиме</label>
        <input type="text" name="name" required placeholder="Марко Марковић">

        <label for="">Е-маил</label>
        <input type="text" name="email" required placeholder="пример@email.com">

        <label for="subject">Наслов</label>
        <input type="text" name="subject" required placeholder="Наслов">

        <label for="content">Садржај поруке</label>
        <textarea name="content" id="" cols="30" rows="10" required placeholder="Садржај поруке"></textarea>
    
    <button class="submit-button">ИСПРАТЕТЕ</button>
    </form>

    <div class="contact-info-phone">
        <h1>Контактирајте не</h1>
        <p>email: email@email.com</p>
        <p>Телефон: 12345678</p>
    </div>
</div>

@endsection