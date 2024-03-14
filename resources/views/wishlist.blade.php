<form action="{{route('wishlist.store')}}" id="contact_form" method="post">
    {{csrf_field()}}
    <input name="user_id" type="text" value="{{Auth::user()->id}}" />
    <input name="product_id" type="text" value="{{$product->id}}" />
</form>