
<button>
    <a href="/cars">BACK</a>
</button>
<h1>
    {{$car['make']}}
</h1>

<h2>
    {{$car['model']}}
</h2>

<p>
    {{$car['year']}}
</p>

<p>
    {{$car['price']}}
</p>


  <!-- Comment Form -->
  <div class="comment-form">
    <h2>Add a Comment</h2>
    <form method="POST" action="/comments">
        @csrf
        <input type="hidden" name="commentable_type" value="{{ get_class($car) }}">
        <input type="hidden" name="commentable_id" value="{{ $car['id'] }}">
        <div class="form-group">
            <textarea name="body" class="form-control" rows="4" placeholder="Write your comment here"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </div>
    </form>
</div>