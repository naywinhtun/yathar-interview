<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>NayWinHtun</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bluma.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

</head>
<body>
  @include('layouts.header')
  <div id="app" class="container" style="padding-top:20px;"> 
    <table class="table is-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Description</th>
          <th>Date</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
       @foreach($projects as $p => $project)
       <tr>
        <td>{{ ++$p}}.</td>
        <td>{{ $project->name }}</td>
        <td>{{ $project->description }}</td>
        <td>{{$project['created_at']->toFormattedDateString()}}</td>
        <td>
            <a class="button is-primary" href="/project/{{ $project->id }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
        </td>
        <td>
          <form method="post" action="/project/{{ $project->id }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <button class="button is-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    </tfoot>
  </table>
  {{ $projects->links('pages.custom') }}
</div>

<script src="/js/app.js"></script>
</body>
</html>
