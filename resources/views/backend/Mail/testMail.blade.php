<form action="{{route('mail.index')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
