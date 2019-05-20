<!doctype html>
<html lang="en">
@include("layout.header")
<body>
    
    <div class="wrapper">
        @include("layout.sidebar") 
        
        <div class="main-panel">
            @include("layout.navbar") 
            @include("layout.main") 
            
            @include("layout.footer")
        </div>
    </div>   
</body>

<!--   Core JS Files   -->
@include("layout.script")

</html>
