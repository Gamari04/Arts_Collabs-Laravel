
@include('admin.header')
<form action="{{ route('project.update',$artProject->id) }}" method="POST"
                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                        style="width: 90%; max-width: 50rem;">
                        @csrf
                        @method('PUT')
                        
                           
                        <h1 class="text-center pb-5 display-4 fs-3">
                            Edit the User
                        </h1>

                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control border" placeholder="Enter a title"
                                name="titima" value="{{ $artProject->title }}">
                        </div>
 
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control border" placeholder="Enter a title"
                                    name="description" value="{{ $artProject->description }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control border" placeholder="Enter a title"
                                    name="start_date" value="{{ $artProject->start_date}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control border" placeholder="Enter a title"
                                    name="end_date" value="{{ $artProject->end_date}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Partner</label>
                                <input type="text" class="form-control border" placeholder="Enter a title"
                                    name="partner_id" value="{{ $artProject->partner->name }}">
                            </div>

                        <div class="mb-3">
                            <label class="form-label">Artists</label>
                            <select class="js-example-basic-multiple select2 " name="users[]" multiple="multiple" style="width: 100%;">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $artProject->users->contains($user) ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach

                            </select>
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
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    <script>
                        $(document).ready(function() {
                           
                            $('.js-example-basic-multiple').select2();
                        });
                    </script>