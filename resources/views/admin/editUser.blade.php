
@include('admin.header');
<form action="{{ route('users.update',$user->id) }}" method="POST"
                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                        style="width: 90%; max-width: 50rem;">
                        @csrf
                        @method('PUT')
                        
                           
                        <h1 class="text-center pb-5 display-4 fs-3">
                            Edit the User
                        </h1>

                        <div class="mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control border" placeholder="Enter a title"
                                name="name" value="{{ $user->name }}">
                        </div>
 
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">User Email</label>
                                <input type="text" class="form-control border" placeholder="Enter a title"
                                    name="email" value="{{ $user->email }}">
                            </div>

                        <div class="mb-3">
                            <label class="form-label">User Role</label>
                            @foreach ($user->roles as $role)
                            <input type="text" class="form-control border" placeholder="Enter the author"
                                name="role" value="{{ $role->name }}">
                                @endforeach
                        </div>


                      

                        {{-- <div class="mb-3">
                            <label class="form-label"> Book Cover </label>
                            <input type="file" class="form-control border" name="book_cover">
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label"> File </label>
                            <input type="file" class="form-control border" name="file">
                        </div> --}}

                        <div class="modal-footer">
                         
                            <button type="submit" class="btn btn-primary" >Edit User</button>
                        </div>
                    </form>