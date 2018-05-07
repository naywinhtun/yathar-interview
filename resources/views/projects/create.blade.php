<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NayWinHtun</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bluma.min.css') }}">

    </head>
    <body>
        @include('layouts.header');
        <div id="app" class="container" style="padding-top:20px;"> 
           <h2 align="center" class="title is-3">Create New Note</h2>
           <form method="POST" action="/project" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

               <div class="field">
                   <label for="name" class="label">Name:</label>
                   <input id="name" name="name" class="input" v-model="form.name">
                   <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
               </div>

               <div class="field">
                   <label for="description" class="label">Description:</label>
                   <input id="description" name="description" class="input" v-model="form.description">
                   <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
               </div>

               <div class="field">
                   <button class="button is-primary" :disabled="form.errors.any()">Create</button>
                   <a href="/" class="button is-info">cancel</a>
               </div>

           </form>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
