<!-- Introduction menu -->
<div class="w3-col l3">
<!-- Categories -->
<div class=" w3-margin">
    <div class="w3-container w3-padding">
      Popüler Kategoriler
    </div>
    <ul class="w3-ul w3-hoverable ">
      @foreach($categories as $category)
      <a href="{{ url('category', ['id' => $category->id]) }}" style="color:black">
      <li class="w3-padding-10 w3-hover-text-white">
        <span style="color:#9ab">{{ $category->category }}</span>
      </li>
      </a>
      @endforeach
     </ul>
  </div>
  <hr>   
  <div class=" w3-margin">
    <div class="w3-container w3-padding">
      Son Eklenen İçerikler
    </div>
    <ul class="w3-ul w3-hoverable">
      @foreach($popularPosts as $post)
      <a href="{{ url('article', ['id' => $post->id]) }}"  style="color:black">
      <li class="w3-padding-16 w3-hover-text-white">
        <span style="color:#9ab" >{{ $post->content_title }}</span>
      </li>
      </a>
      @endforeach
      </ul>
  </div>
</div>
</div><br>


 
  <!-- Labels / tags -->
  <!--<hr> 
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Taglar</h4>
    </div>
      <div class="w3-container w3-white">
      <span class="w3-tag w3-black w3-margin-bottom">Travel</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> 
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>-->