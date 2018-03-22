
  @include('inc/header')
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="{{url('/edit',array($articles->id))}}" class="form-horuzontal" method="post">
            {{csrf_field()}}
            <fieldset>
              <legend>Laravel crud application</legend>
              @if(count($errors)>0)
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                  {{$error}}
                </div>
                @endforeach
              @endif
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                  <input type="text" name="title" class="form-control" id="inputEmail" value="<?php echo $articles->title ?>" placeholder="Title">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassWord" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">
                  <textarea class="form-control" name="description" id="comment"  rows="10"><?php echo $articles->description ?></textarea>
                </div>
              </div>
              <div class="form-group">        
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Update</button>
                      <a href="{{url('/')}}" class="btn btn-primary">Back</a>
                   </div>
                  
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  @include('inc/footer')