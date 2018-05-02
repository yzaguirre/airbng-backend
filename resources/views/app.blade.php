<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
  <script type="text/javascript">
    window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}";
  </script>
  </head>
<body>
<div id="toolbar">
  <img class="icon" src="{{ asset('images/logo.png') }}">
</div>
<h1>vuebnb</h1>
<div id="app">
  <div class="header">
    <div class="header-img" v-bind:style="headerImageStyle" v-on:click="modalOpen = true">
      <button type="button" class="view-photos">View Photos</button>
    </div>
  </div>
  <div class="container">
    <div class="heading">
      <h1>@{{ title }}</h1>
      <p>@{{ address }}</p>
    </div>
    <hr>
    <div class="about">
      <h3>About this listing</h3>
      <p v-bind:class="{contracted: contracted}">@{{ about }}</p>
      <button type="button" name="button" v-on:click="contracted = false" v-if="contracted" class="more">+ More</button>
    </div>
    <div class="lists">
      <hr>
      <div class="amenities list">
        <div class="title">
          <strong>Amenities</strong>
        </div>
        <div class="content">
          <div class="list-item" v-for="amenity in amenities">
            <i class="fa fa-lg" v-bind:class="amenity.icon"></i>
            <span>@{{amenity.title}}</span>
          </div>
        </div>
      </div>
      <hr>
      <div class="prices list">
        <div class="title">
          <strong>Prices</strong>
        </div>
        <div class="content">
          <div class="list-item" v-for="price in prices">
            @{{ price.title }}: <strong>@{{ price.value }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal" v-bind:class="{show: modalOpen}" v-on:keyup.esc="modalOpen = false">
    <button type="button" v-on:click="modalOpen = false" class="modal-close"></button>
    <div class="modal-content">
      <img v-bind:src="images[0]" alt="">
    </div>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
