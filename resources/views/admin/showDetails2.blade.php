
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/material-dashboard.min.css') }}">
  
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
                        <div  class="text-center">
                            <form action="{{ route('collaborate',Auth::user()) }}" method="post">
                                @csrf
                        <input type="hidden" name="art_project_id" value="{{ $artProject->id }}">
                        <button type="submit" class=" mx-auto btn text-dark w-25 "style="background-color: #E9967A " >
                            Collaborate the project
                         </button>
                        
                     
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