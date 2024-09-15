<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Binary Search Tree</title>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: inherit;">
    <form id="insertForm" style="width: 50rem"">
        @csrf
        <div class="container-fluid bg-secondary d-flex justify-content-center align-items-center" style="height: 400px; border-radius: 20px;">
            <section class="w-100">
                <h1 class="fs-4 text-center mb-3 text-light" style="margin-top: -1rem;">Binary Search Tree</h1>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="" id="value" name="value" required>
                    <label for="floatingInput">Value</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="" id="root_id" name="root_id">
                    <label for="floatingInput">Root child id (Optional)</label>
                </div>

                <button class="btn btn-primary w-100 mt-2 mb-3" type="submit">Insert</button>
                <div class="d-flex justify-content-center">
                    <span id="results" class="position-absolute"></span>
                </div>
            </section>
        </div>
    </form>

    <script>
        $('#insertForm').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route('bst.insert') }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#results').html('<div class="alert alert-success text-center">Inserted: ' + JSON.stringify(response) + '</div>');
                },
                error: function(xhr) {
                    $('#results').html('<div class="alert alert-danger text-center">Error inserting value.</div>');
                }
            });
        });
    </script>
</body>
</html>
