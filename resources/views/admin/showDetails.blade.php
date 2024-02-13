@include('admin.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  

</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            @foreach($artProject->getMedia('images') as $image)
            <div class="col-md-12" style="background-image: url({{ $image->getUrl() }});background-position: right:20%; height: 682px; ">
                @endforeach
                <div class="d-flex justify-content-center align-items-center h-100" >
                    <div class="card  text-dark w-50 h-75 "style="background-color:  #E0CBBB; ">
                        <div class="card-body w-100 ">
                            {{-- @foreach($artProject->getMedia('images') as $image)
                            <img src="{{ $image->getUrl() }}" alt="project image" class="w-100 h-25">
                        @endforeach --}}
                            <p class="card-text"><strong>
                            </strong> </p>
                            <p class="card-text"><strong>Title:
                        </strong><i>{{ $artProject->title }}</i> </p>
                        
                            <p class="card-text"><strong>Description:</strong><i>{{ $artProject->description }}</i></p>
                            <p class="card-text"><strong>Date of Start:</strong> <i>{{ $artProject->start_date }}</i></p>
                            <p class="card-text"><strong>Date of End:</strong> <i>{{ $artProject->end_date }}</i></p>
                            <p class="card-text"><strong>About the Partner : </strong> <br>
                                <p><strong class="text-secondary">Name of the Company :</strong> <i>{{ $artProject->partner->name }} </i></p> 
                            <p><strong class="text-secondary">Contact Email : </strong><i>{{ $artProject->partner->contact_email}} </i> </p>
                            <p><strong class="text-secondary">Address : </strong><i>{{ $artProject->partner->city }} {{ $artProject->partner->country }} </i> 
                            </p>
                            
           
                            <p class="card-text"><strong>Artists : </strong>
                                @foreach ($artProject->users as $index => $user)
                                    <i>{{ $user->name }}</i>
                                    @if ($index < count($artProject->users) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="d-flex">
                            <form action="" >
                                @method('PUT')
                                @csrf
                                <button type="submit"class="btn btn-default"><i class='fas fa-edit' style='font-size:28px; color:black'></i></button>
                               </form>
                        <form action="" method="post">
                            @method('DELETE')
                            @csrf
                            <button  class="btn btn-default"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:30px;height:30px">
                            </lord-ico></button>
                        </form>
                    
                     
                           <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
                            assign Artist
                         </button>
                    </div>
                    
                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('assign',$artProject->id) }}" method="POST"
                                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                                        style="width: 90%; max-width: 50rem;">
                                           @csrf
                                        <h1 class="text-center pb-5 display-4 fs-3">
                                            Add New Artists
                                        </h1>
                
                
                                       <div>
                                        <label for="partners">Select Artists :</label><br>
                                        <select class="js-example-basic-multiple select2 " name="users[]" multiple="multiple" style="width: 100%;">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" >
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                       </div>
                
                
                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" >Add Artist</button>
                                        </div>
                                    </form>
                                </div>
                
                            </div>
                        </div>
                    </div>
                
                
                    </div>
               
                </div>
            </div>
        </div>
    </div>
  
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
           
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>