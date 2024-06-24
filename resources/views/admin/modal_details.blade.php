<div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetailsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('user.details') }}" method="post">
                <input type="hidden" name="user_id" id="details_id"> 
                <div class="modal-header">
                        <h6 class="text-center" >You want to see the details of  the user!</h6>
                </div>
 
                <div class="modal-body">
                    <!-- User details will be loaded here -->
                    @foreach($users as $user)
                    <table>
                         <tr>
                            <td>name :</td>
                            <th>{{ $user->name }}</th>
                        </tr>
                        <tr>
                            <td>email :</td>
                            <th>{{ $user->email }}</th>
                        </tr>
                        <tr>
                            <td>photo :</td>
                            <td>
                                <div class="showPhoto">
                                    <div id="imagePreview" style="@if ($row->photo != '') background-image:url('{{ url('/') }}/uploads/{{ $row->photo }}')@else background-image: url('{{ url('/img/avatar.png') }}') @endif;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    @endforeach
                    <!-- User details will be loaded here -->

                </div class="modal-footer">
                <div class="row" style=" text-align: center;">
                    <div class="">
                        <button type="button" class="btn btn-primary btn-modal" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
