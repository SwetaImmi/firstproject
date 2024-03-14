
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel 10 Ajax Autocomplete Search Example - Laravelia</div>
                 <div class="card-body">
                    <form action="{{ route('search') }}" method="get">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="search" name="q" id="searchUser">
                                <span id="userList"></span>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="form-control mb-3" value="Search" style="display: none;">
                            </div>
                        </div>
                    </form>
                    <table style="width: 100%">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $user->product_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status == 'active' ? 'Active' : 'Inactive'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center class="mt-5">
                        {{  $users->withQueryString()->links() }}
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <script type="text/javascript">
    $('#searchUser').on('keyup',function() {
        var query = $(this).val(); 
        $.ajax({
            url:"{{ route('search') }}",
            type:"GET",
            data:{'query':query},
            success:function (data) {
                $('#userList').html(data);
            }
            
        })
        // alert("hgds");
    });
    $('body').on('click', 'li', function(){
        var value = $(this).text();
        //do what ever you want
    });
    // alert("hgds");
</script>
