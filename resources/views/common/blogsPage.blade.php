<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs UI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.main-master')
    @section('content')

    <div class="container mt-3">
        <h2>Enter Blog's Details</h2>
        <div class="card">
            <div class="card-body">
                <form id="detailsForm" method="post" action="submit_form.php">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-select" aria-label="category">
                            <option selected>Select Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <hr>

        <h2>Saved Details</h2>
        <table class="table mt-4">
            <thead class="table-warning">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Title 1</td>
                    <td>Description 1</td>
                    <td>Category 1</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>
