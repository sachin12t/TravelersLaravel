

<div class="col-lg-5">
    <div class="card border-0">
        <div class="card-header bg-primary text-center p-4">
            <h1 class="text-white m-0">Insert Destination data</h1>
        </div>
        <div class="card-body rounded-bottom bg-white p-5">
            <form action="insert_packages" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="city" class="form-control p-4" placeholder="city" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="day" class="form-control p-4" placeholder="day" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="person" class="form-control p-4" placeholder="person" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="para" class="form-control p-4" placeholder="para" required="required" />
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control p-4" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="rating" class="form-control p-4" placeholder="rating" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="ratingcount" class="form-control p-4" placeholder="ratingcount" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="amount" class="form-control p-4" placeholder="amount" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
