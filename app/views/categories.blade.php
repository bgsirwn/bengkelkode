<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item">
                <span class="badge badge-primary">{{$category->jumlah}}</span>
                    {{$category->name}}
            </li>
            @endforeach
        </ul>
    </div>
</div>