@extends('layouts.app')

@section('content')

<div class="responsive-container-block container">
  <p class="text-blk team-head-text">
    Our Team
  </p>
  <div class="responsive-container-block">
    
    <!-- Member 1: Phoebe -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/phoebe.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/phoebe.jpeg') }}" alt="Phoebe Valerie">
        </div>
        <p class="text-blk name">
          Phoebe Valerie Hans Ritdrix
        </p>
        <p class="text-blk position">
          13 Februari 2008 • Aquarius
        </p>
        <p class="text-blk feature-text">
          "We grow through what we go through"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

    <!-- Member 2: Jonathan -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/jonathan.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/jonathan.jpeg') }}" alt="Jonathan William">
        </div>
        <p class="text-blk name">
          Jonathan William Hariyono
        </p>
        <p class="text-blk position">
          8 Februari 2008 • Aquarius
        </p>
        <p class="text-blk feature-text">
          "Liberte, Egalite, Fraternite"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

    <!-- Member 3: Verlita -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/verlita.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/verlita.jpeg') }}" alt="Verlita Adian">
        </div>
        <p class="text-blk name">
          Verlita Adian
        </p>
        <p class="text-blk position">
          11 Mei 2008 • Taurus
        </p>
        <p class="text-blk feature-text">
          "Raurus, salam bogeng"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

    <!-- Member 4: Hanna -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/hanna.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/hanna.jpeg') }}" alt="Hanna Maria">
        </div>
        <p class="text-blk name">
          Hanna Maria Kurnia
        </p>
        <p class="text-blk position">
          16 Maret 2008 • Pisces
        </p>
        <p class="text-blk feature-text">
          "I was enchanted to meet you"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

    <!-- Member 5: Fransisca -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/fransisca.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/fransisca.jpeg') }}" alt="Fransisca Natalia">
        </div>
        <p class="text-blk name">
          Fransisca Natalia Ayu Wibowo Putri
        </p>
        <p class="text-blk position">
          25 Desember 2007 • Capricorn
        </p>
        <p class="text-blk feature-text">
          "Jadilah versi terbaik dari dirimu"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

    <!-- Member 6: Nathanael -->
    <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <!-- Mengambil foto dari public/images/team/nathanael.jpeg -->
          <img class="team-member-image" src="{{ asset('images/team/nathanael.jpeg') }}" alt="Nathanael Garren">
        </div>
        <p class="text-blk name">
          Nathanael Garren Jovanius
        </p>
        <p class="text-blk position">
          25 Maret 2008 • Aries
        </p>
        <p class="text-blk feature-text">
          "Aku bukanlah apa yang terjadi padaku, aku adalah apa yang aku pilih untuk menjadi"
        </p>
        <div class="social-icons">
          <a href="#" target="_blank"><i class="fa-brands fa-instagram twitter-icon"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-tiktok facebook-icon"></i></a>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
