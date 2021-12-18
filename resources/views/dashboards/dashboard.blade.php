<x-app-layout>
    <div class="container-fluid">
        <div class="d-grid grid-cols-2 custom-grid-media">
            <div class="row px-1">
                <div class="card border subs-card">
                    <div class="card-body">
                        <div class="">
                            <h2 class="mb-2">Hi, {{ $user->firstname }} {{ $user->lastname }}</h2>
                            <p class="pb-3">Welcome to Trackhub. It’s good to have you here!</p>
                        </div>                    
                    </div>
                </div>
            </div>
            
        </div>

        
        

    <!-- Page end  -->
    </div>
</x-app-layout>

<script>
    // let myDropzone = new Dropzone("div#image-upload", { url: "/file/post"});
    // The dropzone method is added to jQuery elements and can
    // be invoked with an (optional) configuration object. $("div#myId").dropzone({ url: "/file/post" });
</script>