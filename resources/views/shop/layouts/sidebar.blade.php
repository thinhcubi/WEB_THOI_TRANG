<div class="sidebar col-md-3 col-sm-4">
    <ul class="list-group margin-bottom-25 sidebar-menu">
        @foreach($categories as $key => $category)
        <li class="list-group-item clearfix"><a href="{{route('product.category',$category->id)}}"><i class="fa fa-angle-right"></i>{{$category->name}}</a></li>
        @endforeach
    </ul>
</div>
