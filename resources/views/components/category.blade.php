{{-- <div>
    I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger
</div> --}}

<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          @foreach($categories as $category)
          <li>
            <a href="#">{{$category->name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          @foreach($categories as $category)
          <li>
            <a href="#">{{$category->name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>