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
           <h2 align="center" class="title is-3">Edit Note</h2>
           <form method="post" action="/project/{{ $project->id }}" @keydown="form.errors.clear($event.target.name)">
               {{ method_field('PATCH') }}
               {{ csrf_field() }}
               <div class="field">
                   <label for="name" class="label">Name:</label>
                   <input id="name" name="name" class="input" value="{{ old('name',$project->name) }}">
                   @if ($errors->has('name'))
                        <span class="help is-danger">{{ $errors->first('name') }}</span>
                   @endif
               </div>

               <div class="field">
                   <label for="description" class="label">Description:</label>
                   <input id="description" name="description" class="input" value="{{ old('description',$project->description) }}">
                   @if ($errors->has('description'))
                        <span class="help is-danger">{{ $errors->first('description') }}</span>
                   @endif
               </div>

               <div class="field">
                   <button class="button is-primary">Update</button>
                   <a href="/" class="button is-info">cancel</a>
               </div>

           </form>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
