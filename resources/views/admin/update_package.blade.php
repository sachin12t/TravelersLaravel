

<div class="col-lg-5">
    <div class="card border-0">
        <div class="card-header bg-primary text-center p-4">
            <h1 class="text-white m-0">Insert Destination data</h1>
        </div>
        <div class="card-body rounded-bottom bg-white p-5">
            <form action="post_package" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{$data->city}}" name="city" class="form-control p-4" placeholder="city" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->day}}" name="day" class="form-control p-4" placeholder="day" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->person}}" name="person" class="form-control p-4" placeholder="person" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->para}}" name="para" class="form-control p-4" placeholder="para" required="required" />
                </div>
                <div class="form-group">
                    <input type="file"  value="{{asset('img/'.$data->image)}}" name="image" class="form-control p-4" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->rating}}" name="rating" class="form-control p-4" placeholder="rating" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->ratingcount}}" name="ratingcount" class="form-control p-4" placeholder="ratingcount" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" value="{{$data->amount}}" name="amount" class="form-control p-4" placeholder="amount" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
