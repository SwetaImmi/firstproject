<div class="row">
         <div class="col-md-12">
         
          <h3 class="text-info"><b>'.$row->product_name.'</b></h3>
          <p>'.$row->product_catogery.'</p>
          <div class="col-md-6">
           <p><b>Publish Date - '.$row->product_quantity.'</b></p>
          </div>
          <div class="col-md-6" align="right">
           <p><b><i>By - '.$row->product_image.'</i></b></p>
           <p><b><i>By - '.asset('uploads/'.$row->product_image).'</i></b></p>
           <img class="table-avatar" src = '.asset('uploads/'.$row->product_image).' style="height: 50px;width:100px;">
          </div>
          <br />
          <hr />
         </div>         
        </div>