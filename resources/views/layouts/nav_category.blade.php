<h2>Category</h2>
<div class="panel-group category-products" id="accordian">           
    @foreach ($categories as $category)    
      <div class="panel panel-default">                
                    @if ($category->subcategories->count()>0)
                            <div class="panel-heading">  
                                <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->EnglishProductCategoryName }}">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    {{ $category->EnglishProductCategoryName }}
                                            </a>
                                 </h4>
                            </div>
                            <div id="{{ $category->EnglishProductCategoryName }}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            <ul>                                                                                                
                                                @foreach ($category->subcategories as $subcategory)
                                                    <li><a href="#">{{$subcategory->EnglishProductSubcategoryName}}</a></li>                                            
                                                @endforeach
                                                
                                            </ul>
                                    </div>
                            </div>                      
                    @else
                        <div class="panel-heading">   
                            <h4 class="panel-title"><a href="#">{{ $category->EnglishProductCategoryName }}</a></h4>
                        </div>
                    @endif                                        
        </div>           
     @endforeach    
</div>