
<div class="col-lg-5">
    <div class="card border-0">
        <div class="card-header bg-primary text-center p-4">
            <h1 class="text-white m-0">Insert Destination data</h1>
        </div>
        <div class="card-body rounded-bottom bg-white p-5">
            <form action="insert_destination" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="dtitle" class="form-control p-4" placeholder="dtitle" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="dcities" class="form-control p-4" placeholder="dcities" required="required" />
                </div>
                <div class="form-group">
                    <input type="file" name="dimage" class="form-control p-4" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
