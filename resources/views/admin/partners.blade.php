@include('admin.header')

<h1 style="color: #000000"><i>Our Partners</i></h1>
<button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
    Add Partner
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('partner.store') }}" method="post"
                    enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                    style="width: 90%; max-width: 50rem;">
                       @csrf
                    <h1 class="text-center pb-5 display-4 fs-3">
                        Add New Partner
                    </h1>

                    <div class="mb-3">
                        <label class="form-label">Name of the Partner</label>
                        <input type="text" class="form-control border" placeholder="Enter a title"
                            name="name">
                    </div>

    
                    <div class="mb-3">
                        <label class="form-label">Contact Email</label>
                        <input type="email" class="form-control border" placeholder="Enter a title"
                            name="contact_email">
                    </div>

                 


                    <div class="mb-3">
                        <label class="form-label">Contact Phone</label>
                        <input type="text" class="form-control border" placeholder="Enter the author"
                            name="contact_phone">
                    </div>


               

                    <div class="mb-3">
                        <label class="form-label">Adress</label>
                        <input type="text" class="form-control border" placeholder="Enter the year of publication"
                            name="address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control border" placeholder="Enter the year of publication"
                            name="city">
                    </div>

                   

                   

                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control border" name="country">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> More Informations</label>
                    <textarea type="text" class="form-control border" placeholder="Enter a description"
                            name="additional_info">
                        </textarea>

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


<table id="fresh-table" class="table">
    <thead>
      <th data-field="id">Name</th>
      <th data-field="name">Contact email</th>
      <th data-field="Email">Contact phone</th>
      <th data-field="Role">Adress</th>
      <th data-field="Role">City-Country</th>
      <th data-field="Role">More Informations</th>
      
    </thead>
    <tbody>
   
      @foreach ($partners as $partner)
          
      
    <tr>
        <td>{{ $partner->name }}</td>
        <td>{{ $partner->contact_email }}</td>
        <td>{{ $partner->contact_phone }}</td>
        <td>{{ $partner->address }}</td>
        <td>{{ $partner->city }} - {{ $partner->country }}</td>
        <td>{{ $partner->additional_info}}</td>
              <!-- <td><button  class="btn btn-default"><a href="edit.php?id=">Edit</a></button></td>-->
              <td>
                <form action="" >
                @method('PUT')
                @csrf
                
                <button type="submit"class="btn btn-default"><i class="material-icons text-sm me-2">edit</i></button>
               </form>
            </td> 
              <td>
                <form action="" method="post">
                @method('DELETE')
                @csrf
                <button  class="btn btn-default"><lord-icon
                    src="https://cdn.lordicon.com/skkahier.json"
                    trigger="hover"
                    style="width:30px;height:30px">
                </lord-ico></button>
            </form>
        </td>
    </tr> 
    @endforeach
 
  </div>
      
     
    
    </tbody>
  </table>
</div>

    </div>


    
    

   
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>