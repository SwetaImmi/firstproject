<!doctype html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel 8 Load More Data using Ajax jQuery - Techsolutionstuff</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
     .wrapper > ul#results li {
       margin-bottom: 2px;
       background: #e2e2e2;
       padding: 20px;     
       list-style: none;
     }
     .ajax-loading{
       text-align: center;
     }
  </style>
</head>  
<body>
  <h2 style="text-align: center;margin: 30px 0px">Laravel 8 Load More Data using Ajax jQuery - Techsolutionstuff</h2>
  <div class="container">
  <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $product)
                      <tr>
                        <td><a href="pages/examples/invoice.html">{{$product->id}}</a></td>
                        <td>{{$product->product_name}}</td>
                        <td><span class="badge badge-success">{{$product->product_catogery}}</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">{{$product->product_price}}</div>
                        </td>
                      </tr>
                   
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
   <div class="wrapper">
    <ul id="results"></ul>
     <div class="ajax-loading"><img src="{{ asset('images/loader.gif') }}" /></div>
   </div>
  </div>
</body>
</html>
<script>
   var site_url = "{{ url('/') }}";   
   var page = 1;
   
   load_more(page);

   $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
      page++;
      load_more(page);
      }
    });

    function load_more(page){
        $.ajax({
          url: site_url + "/user?posts=" + page,
          type: "get",
          datatype: "html",
          beforeSend: function()
          {
            $('.ajax-loading').show();
          }
        })
        .done(function(data)
        {          
          if(data.length == 0){
          $('.ajax-loading').html("No more records!");
          return;
        }
          $('.ajax-loading').hide();
          $("#results").append(data);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
          alert('No response from server');
        });
    }
</script>