<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs UI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-primary-subtle">
    @extends('layout.main-master')
    @section('content')
    <div class="container mt-3 w-75">
        <div class="card mt-4 border border-primary px-5 py-2 shadow-lg">
        <h2 class ="pt-4 px-3 text-primary text-center">Enter Blog's Details</h2>
            <div class="card-body">
                <form id="createBlogForm" method="POST" action="{{ route('blog.create')}}">
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3" 
                                  placeholder="Enter description">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-select" aria-label="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="container mt-4 card border border-primary shadow-lg px-5">
            <h2 class ="pt-4 pl-4 text-primary text-center mx-4">Saved Details</h2>
            <table id="table" class="table table-bordered">
                <thead class="table-warning text-center">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td> {{ $blog->title }}</td>
                            <td> {{ $blog->description }}</td>
                            <td> {{ $blog->category->name ?? 'N/A'}} </td>
                        </tr>               
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

<script type = "module">
    const form = "#createBlogForm";
    
    $(function(){
        createBlog();
    });

    function createBlog(){
        $(form).on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: "{{route('blog.create')}}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache:false,
                processData:false,
                success:function(response){
                    populateData(response);
                    resetField();
                }, error:function(response){
                    alert(response);
                }
            });
        });
    };

    function populateData(data){
        var row = "<tr>"
        row += '<td>'+data.title+'</td>';
        row += '<td>'+data.description+'</td>';
        row += '<td>'+data.category.name+'</td>';
        row += "</tr>"
        $("#table").find('tbody').prepend(row);
    }

    function resetField(){
        $(form).find('input[type=text], textarea').val("");
        $(form).find('option[selected]').prop('selected', true);
    }

</script>
</html>
