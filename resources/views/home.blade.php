@include('inc/header')
<div class="container">
  <div class="row">
    <legend>Laravel Crud application</legend>
    @if (session('info'))
     <div class="alert alert-success">{{session('info')}}</div>
      {{session('info')}}
    @endif
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($articles) >0)
        @foreach($articles ->all() as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->description }}</td>
        <td>
          <a href='{{ url("/read/{$article->id}")}}' class="label label-primary">Read</a>|
          <a href='{{ url("/update/{$article->id}")}}' class="label label-success">Update</a>|
          <a class="label label-danger" href='{{ url("/delete/{$article->id}")}}'>Delete</a>
        </td>
      </tr>
        @endforeach
      @endif
    </tbody>
  </table>
  </div>
</div>
  @include('inc/footer')