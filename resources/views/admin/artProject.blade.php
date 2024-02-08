
@include('admin.header');

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: #000000"><i>Arts Projects</i></h1>

    <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
        Add Project
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store') }}" method="post"
                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                        style="width: 90%; max-width: 50rem;">
                           @csrf
                        <h1 class="text-center pb-5 display-4 fs-3">
                            Add New Project
                        </h1>

                        <div class="mb-3">
                            <label class="form-label">Project Title</label>
                            <input type="text" class="form-control border" placeholder="Enter a title"
                                name="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"> Project Description</label>
                        <textarea type="text" class="form-control border" placeholder="Enter a description"
                                name="description">
                            </textarea>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project Status</label>
                            <input type="text" class="form-control border" placeholder="Enter the author"
                                name="status">
                        </div>


                   

                        <div class="mb-3">
                            <label class="form-label">Date of Start</label>
                            <input type="date" class="form-control border" placeholder="Enter the year of publication"
                                name="start_date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date of End</label>
                            <input type="date" class="form-control border" placeholder="Enter the year of publication"
                                name="end_date">
                        </div>

                       

                       

                        <div class="mb-3">
                            <label class="form-label"> Project image </label>
                            <input type="file" class="form-control border" name="image">
                        </div>

                        

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Add Project</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<div class="pdf-list d-flex justify-content--start flex-wrap books">
     @foreach ($projects as $project)
         <div class="col-3  ">
            <img src="{{ asset('images/byedbook.jpg') }}" class="w-50" alt="Book Cover">
            <div class="card-body">
                <h5 class="card-title">
                   
                
                 
                </h5>
                <p class="card-text">
                    <i><b>By:
                            
                            <br>
                        </b></i>

                <p>
                 <b>Genre :</b> 
                </p>
                <p>
                  <b>Description :</b> 
                </p>
                <p>
                   <b> Publication Year :</b>
                </p>
                <p>
                  <b> Total Copies : </b> 
                </p>
                <p>
                 <b>Available Copies : </b>  
                </p>
                 <div class="card-footer d-flex justify-content-evenly ">
                    <form action="" >
                        @method('PUT')
                        @csrf
                        
                        <button type="submit"class="btn btn-dark">Edit</button>
                    </form>
                    <form action="" method="post">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit"class="btn btn-secondary">Delete</button>
                    </form>
               
                 </div>
                
         
                <!-- <a href="uploads/files/" class="btn btn-success">Open</a>

                <a href="uploads/files/" class="btn btn-primary"
                    download="">Download</a> -->
            </div>
        </div>
        @endforeach
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>