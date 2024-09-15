<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <h1 class="modal-title fs-5 text-center mt-3" id="exampleModalLabel">Search Value</h1>
        <div class="modal-body">
            <form id="searchForm" class="mb-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="value" name="value" placeholder="">
                    <label for="floatingInput">Search Value</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="root_id" name="root_id" placeholder="">
                    <label for="floatingInput">Root ID</label>
                </div>

                <button class="btn btn-primary w-100"><i class="fa fa-search"></i> Search</button>
            </form>

            <span id="result" class="mt-3"></span>
        </div>
      </div>
    </div>
  </div>

  <script>
     $('#searchForm').submit(function(e){
            e.preventDefault();

            $.ajax({
                url: '{{ route('bst.search') }}',
                type: 'GET',
                data: $(this).serialize(),
                success: function(response){
                    console.log("value found: " + JSON.stringify(response));
                    $('#result').html("<div class='alert alert-success text-center'>Value Found:" + JSON.stringify(response) + "</div>")
                },
                error: function(xhr){
                    console.log("value not found");
                    $('#result').html("<div class='alert alert-danger text-center'>Value Not Found</div>")
                }
            });
        });
  </script>
