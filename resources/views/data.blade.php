<div class="card-body p-0">
    <table class="table table-striped projects text-justify">

        <?php if (Auth::check()) {
            if (Auth::user()->role == 'Admin') { // if the current role is Administrator
        ?>

                
                    @foreach($product as $products)
                    <tbody>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            {{$products->product_name}}
                        </td>
                        <td class="text-justify">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    @if($products->product_image)
                                    <img class="table-avatar" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 50px;width:100px;">

                                    @endif
                                    <!-- <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png"> -->
                                </li>

                            </ul>
                        </td>
                        <td class="text-center"> {{$products->product_price}}</td>


                        <td class="project-actions text-right">
                            <!-- <a class="btn btn-primary btn-sm" href="{{ url('update_product').'/'. $products->id  }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                            <a class="btn btn-info btn-sm" href="{{ url('project-edit').'/'. $products->id  }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('projects/delete').'/'. $products->id}}" role="button">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>

                    @endforeach
         

            <?php
            } elseif (Auth::user()->role == 'User') {
            ?>
                @foreach($product as $products)
                @if(Auth::user()->email == $products->email)
                <tbody>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            {{$products->product_name}}
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    @if($products->product_image)
                                    <img class="table-avatar" src="{{ asset('uploads/'.$products->product_image) }}" style="height: 50px;width:100px;">
                                    @else
                                    <span>No image found!</span>
                                    @endif
                                    <!-- <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png"> -->
                                </li>

                            </ul>
                        </td>
                        <td class="project_progress">
                            {{$products->product_catogery}}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success"> {{$products->product_price}}</span>
                        </td>
                        <td class="project-actions text-right">
                            <!-- <a class="btn btn-primary btn-sm" href="{{ url('update_product').'/'. $products->id  }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                            <a class="btn btn-info btn-sm" href="{{ url('project-edit').'/'. $products->id  }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('projects/delete').'/'. $products->id}}" role="button">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>

                </tbody>
                @endif
                @endforeach

        <?php
            }
        }

        ?>
    </table>