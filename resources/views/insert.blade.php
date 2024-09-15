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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Stylesheets/insert.css') }}">
    <title>Binary Search Tree</title>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: inherit;">

        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 275px; border-radius: 20px; width: 30rem;">
            <section class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="border-radius: 20px">
                <div style="height: 365px; width: 27rem;">
                    <h1 class="fs-4 text-center mb-3 text-light" style="margin-top: 1rem;">Binary Search Tree</h1>
                    <form id="insertForm">
                        @csrf
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="" id="value" name="value" required>
                        <label for="floatingInput">Value</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="" id="root_id" name="root_id">
                        <label for="floatingInput">Root child id (Optional)</label>
                    </div>

                    <button class="btn btn-primary w-100 mt-2 mb-3" type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i> Insert</button>

                    <div class=" d-flex justify-content-center">
                        <a class="search-btn text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-search"></i> Search Value</a>
                    </div>

                    </form>
                    <div>
                        <span id="results"  style="top: 650px"></span>
                    </div>
                </div>
            </section>
        </div>


    @extends('components.search')

    <script>
        $('#insertForm').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '/api/bst/insert',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#results').html('<div class="alert alert-success text-center">Inserted: ' + JSON.stringify(response) + '</div>');
                },
                error: function(xhr) {
                    $('#results').html('<div class="alert alert-danger text-center w-100">Error inserting value.</div>');
                }
            });
        });
    </script>
</body>
</html>
